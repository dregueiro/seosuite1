from pathlib import Path

# Ajusta si quieres excluir más cosas
EXCLUDE_DIRS = {
    ".git", ".venv", "venv", "__pycache__", ".mypy_cache", ".pytest_cache",
    ".ruff_cache", "node_modules", "dist", "build", ".idea", ".vscode"
}

ROOT = Path(__file__).resolve().parent
OUTPUT = ROOT / "_ALL_CODE_PY_HTML.md"

# extensiones a incluir
EXTS = {".py", ".html"}

def is_excluded(path: Path) -> bool:
    return any(part in EXCLUDE_DIRS for part in path.parts)

files = sorted(
    p for p in ROOT.rglob("*")
    if p.is_file()
    and p.suffix.lower() in EXTS
    and not is_excluded(p.relative_to(ROOT))
)

def fence_for(path: Path) -> str:
    ext = path.suffix.lower()
    if ext == ".py":
        return "python"
    if ext == ".html":
        return "html"
    return ""

with OUTPUT.open("w", encoding="utf-8") as out:
    out.write(f"# Project export\n\n")
    out.write(f"**Project root:** `{ROOT}`\n\n")
    out.write(f"**Included extensions:** {', '.join(sorted(EXTS))}\n\n")
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

print(f"Created: {OUTPUT}")
