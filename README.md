# Portfolio – Radek Dobiáš

Osobní portfolio web pro Radka Dobiáše – terapeuta, konzultanta a odborníka na železniční technologie.

## Živé verze

| Prostředí | URL |
|-----------|-----|
| Staging | [pokus.radekdobias.cz](https://pokus.radekdobias.cz) |
| Produkce | [radekdobias.cz](https://radekdobias.cz) |

## Soubory a adresáře

| Soubor / adresář | Popis |
|------------------|-------|
| `index.html` | Celý web – HTML, CSS i JS v jednom souboru |
| `send.php` | Backend pro kontaktní formulář |
| `assets/images/` | Fotografie |
| `assets/graphics/` | Loga, ikony, ilustrace |
| `.github/workflows/deploy.yml` | CI/CD pipeline (deploy na staging) |

## Sekce webu

1. **Hero** – úvodní sekce s CTA tlačítky
2. **O mně** – text + stat karty (10+ let zkušeností, 3 oblasti odbornosti, ČR)
3. **Služby** – 3 karty: Terapie, Konzultace, Železniční technologie
4. **Kontakt** – kontaktní údaje + AJAX formulář

## Technologie

- Čistý HTML / CSS / JavaScript (bez frameworků)
- Tmavý theme, CSS proměnné, responzivní design
- PHP `mb_send_mail` pro odesílání kontaktního formuláře
- Deploy: GitHub Actions + FTP na WEDOS

## Nasazení

Push na větev `main` automaticky nasadí web na staging (`pokus.radekdobias.cz`).
Produkce (`radekdobias.cz`) se nasazuje ručně.

FTP přihlašovací údaje jsou uloženy v GitHub Secrets: `FTP_SERVER`, `FTP_USERNAME`, `FTP_PASSWORD`.

## Design

- Barva akcent: `#4f8ef7` (modrá), `#7c5cbf` (fialová)
- Font: Segoe UI / system-ui
- Favicon: SVG emoji 🧭

## Kontaktní formulář

- AJAX POST na `send.php`
- Odesílá mail na `radek@radekdobias.cz`, odesílatel `portfolio@radekdobias.cz`
- Karta Terapie odkazuje na [cestousebepoznani.cz](https://www.cestousebepoznani.cz)
