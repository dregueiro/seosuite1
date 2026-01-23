from pathlib import Path

# --- CONFIGURACIÓN ---

# Directorios a excluir siempre
EXCLUDE_DIRS = {
    ".git", ".venv", "venv", "__pycache__", ".mypy_cache", ".pytest_cache",
    ".ruff_cache", "node_modules", "dist", "build", ".idea", ".vscode"
}

# Extensiones a incluir
EXTS = {".py", ".html"}

ROOT = Path(__file__).resolve().parent

# --- INTERACCIÓN CON EL USUARIO ---

print("--- Exportador de Código ---")
print(f"Directorio raíz: {ROOT}")
print("Las carpetas 'templates' se incluirán automáticamente.")
user_input = input("Escribe las APPS a copiar (separadas por coma) o ENTER para todo: ")

# Procesar entrada del usuario
if user_input.strip():
    # Creamos un set con los nombres limpios
    SELECTED_APPS = {app.strip() for app in user_input.split(",")}
    
    # Generamos el nombre del archivo basado en las apps pedidas
    # Ejemplo: si pides "core, users", el archivo será "core_users.md"
    filename_str = "_".join(sorted(SELECTED_APPS)) + ".md"
    
    print(f"--> Apps seleccionadas: {', '.join(SELECTED_APPS)}")
else:
    # Si no selecciona nada, modo completo
    SELECTED_APPS = set()
    filename_str = "_ALLCODE.md"
    print("--> Modo completo (Todo el proyecto)")

# Definimos la ruta de salida final
OUTPUT = ROOT / filename_str


# --- FUNCIONES DE FILTRADO ---

def is_excluded(path: Path) -> bool:
    """Verifica si el path contiene alguna carpeta prohibida."""
    return any(part in EXCLUDE_DIRS for part in path.parts)

def is_wanted_location(path: Path) -> bool:
    """
    Filtra si el archivo debe incluirse según las apps seleccionadas.
    """
    try:
        rel = path.relative_to(ROOT)
    except ValueError:
        return False

    # 1. Si no hay apps seleccionadas, queremos todo
    if not SELECTED_APPS:
        return True

    # 2. Si es un template, lo queremos siempre (sea global o local)
    if "templates" in path.parts:
        return True
    
    # 3. Si el archivo está dentro de una de las apps seleccionadas
    # (rel.parts[0] es la carpeta superior, ej: "core")
    if rel.parts and rel.parts[0] in SELECTED_APPS:
        return True

    return False

def fence_for(path: Path) -> str:
    """Define el lenguaje para el bloque de código."""
    ext = path.suffix.lower()
    return {
        ".py": "python",
        ".html": "html",
        ".js": "javascript",
        ".css": "css",
        ".json": "json"
    }.get(ext, "")


# --- PROCESO PRINCIPAL ---

# Recolección de archivos
files = sorted(
    p for p in ROOT.rglob("*")
    if p.is_file()
    and p.suffix.lower() in EXTS
    and not is_excluded(p)
    and is_wanted_location(p)
)

print(f"Generando '{OUTPUT.name}' con {len(files)} archivos...")

# Escritura del archivo
with OUTPUT.open("w", encoding="utf-8") as out:
    out.write(f"# Project Export: {filename_str}\n\n")
    out.write(f"**Root:** `{ROOT}`\n\n")
    out.write(f"**Included Apps:** {', '.join(SELECTED_APPS) if SELECTED_APPS else 'ALL'}\n\n")
    out.write(f"**Total files:** {len(files)}\n\n")

    for p in files:
        rel = p.relative_to(ROOT)
        lang = fence_for(p)

        out.write("\n---\n\n")
        out.write(f"## `{rel}`\n\n")
        out.write(f"```{lang}\n")

        try:
            content = p.read_text(encoding="utf-8", errors="replace")
        except Exception as e:
            content = f"[ERROR reading file: {e}]"

        out.write(content)
        if not content.endswith("\n"):
            out.write("\n")

        out.write("```\n")

print(f"¡Listo! Archivo creado: {OUTPUT.name}")