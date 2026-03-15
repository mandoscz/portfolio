# Portfolio – Radek Dobiáš

## Kdo jsem
Nejsem programátor. Popisuju, co chci. Ty to implementuješ.

## Jak pracujeme
Komunikuj česky. Kód piš anglicky. Komentáře česky bez diakritiky.
Než začneš měnit cokoliv, napiš plán a počkej na moje OK.
Po každé změně ověř, že projekt funguje.
Pokud si nejsi jistý, zeptej se. Nehádej.
Eviduj změny, piš dokumentaci a udržuj README.md soubor.
README.md obsahuje údaje o projektu a jeho funkcích.

## Co nedělej
Neměň soubory, které fungují.
Nepřidávej funkce, o které jsem nepožádal.
Nepiš mi kód do chatu. Rovnou ho ukládej do souborů.
Nedělej velké změny najednou. Postupuj po malých krocích.

## Co je tento projekt
Osobní portfolio web pro Radka Dobiáše – terapeuta, konzultanta a odborníka na železniční technologie.

## Struktura
- `index.html` – celý web (single-page, vše inline: CSS + HTML + JS)
- `send.php` – backend pro kontaktní formulář (AJAX, `mb_send_mail`)
- `.github/workflows/deploy.yml` – CI/CD pipeline

## Sekce webu
1. **Hero** – úvodní sekce s CTA
2. **O mně** – 3 stat karty (10+ let zkušeností, 3 oblasti odbornosti, ČR působiště)
3. **Služby** – 3 karty: Terapie, Konzultace, Železniční technologie
4. **Kontakt** – AJAX formulář → `send.php` → mail na radek@radekdobias.cz

## Nasazení
- **Staging:** `pokus.radekdobias.cz` – automaticky při push na `main` (GitHub Actions + FTP na WEDOS)
- **Produkce:** `radekdobias.cz` – zatím ruční, CI/CD pipeline pro produkci není nastavena
- FTP credentials jsou v GitHub Secrets: `FTP_SERVER`, `FTP_USERNAME`, `FTP_PASSWORD`
- Server dir: `/www/domains/pokus.radekdobias.cz/`

## Design
- Tmavý theme, barvy přes CSS proměnné v `:root`
- `--accent: #4f8ef7` (modrá), `--accent2: #7c5cbf` (fialová)
- Font: Segoe UI / system-ui
- Favicon: 🧭 jako SVG data URI

## Kontaktní formulář
- Odesílá AJAX POST na `send.php`
- Mail jde na `radek@radekdobias.cz`, From: `portfolio@radekdobias.cz`
- UTF-8 encoding přes `mb_send_mail`

## Důležité vazby
- Karta Terapie odkazuje na `https://www.cestousebepoznani.cz`
