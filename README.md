# Bruno Antichità — Tema WordPress

Tema WordPress nativo per **brunoantichita.it** — bottega antiquaria a Firenze specializzata in valutazione e acquisto di oggettistica e arredi d'antiquariato da privati.

## Requisiti

- WordPress 5.8+
- PHP 7.4+
- Nessun plugin obbligatorio

## Installazione

1. Scarica o clona questo repository
2. Comprimi la cartella `bruno-antichita` in un file `.zip`
3. In WordPress: **Aspetto → Temi → Aggiungi nuovo → Carica tema**
4. Attiva il tema

## Configurazione post-attivazione

### 1. Menu di navigazione
- **Aspetto → Menu** → Crea menu "Menu Principale" → Assegna a **Menu Principale**
- Voci consigliate: Home, Valutazioni, Cosa acquistiamo, Oggetti acquistati, Articoli, Chi siamo, Contatti
- Crea un secondo menu "Footer Links" → Assegna a **Link Footer**

### 2. Homepage
- **Impostazioni → Lettura** → Pagina statica → Seleziona la pagina creata come homepage
- Il tema usa `front-page.php` automaticamente

### 3. Informazioni di contatto
- **Aspetto → Personalizza → Informazioni Contatto**
- Configura: telefono, WhatsApp, email, indirizzo, orari

### 4. Logo
- **Aspetto → Personalizza → Identità del sito** → Carica logo

### 5. Categorie post
- Crea la categoria `oggetti-acquistati` (slug: `oggetti-acquistati`)
- I post in questa categoria appaiono automaticamente in homepage nella sezione "Oggetti acquistati recentemente"

### 6. Template pagine
- **Pagina Servizio** (`page-servizio.php`): per le pagine SEO (valutazione, acquisto, ecc.)
- **Pagina Contatti** (`page-contatti.php`): per la pagina contatti con form e mappa

## Struttura file

```
bruno-antichita/
├── style.css                  # Header tema WordPress
├── functions.php              # Setup, enqueue, customizer
├── screenshot.png             # Anteprima tema
├── index.php                  # Template fallback / blog
├── front-page.php             # Homepage
├── page.php                   # Pagine generiche
├── single.php                 # Articoli e oggetti singoli
├── archive.php                # Archivi categoria/tag
├── search.php                 # Risultati ricerca
├── 404.php                    # Pagina errore
├── searchform.php             # Form di ricerca custom
├── header.php                 # Header con nav e contatti
├── footer.php                 # Footer con link, WhatsApp floating
├── page-servizio.php          # Template: Pagina Servizio (SEO)
├── page-contatti.php          # Template: Pagina Contatti
├── assets/
│   ├── css/
│   │   └── main.css           # Stili completi del tema
│   ├── js/
│   │   └── main.js            # Mobile menu, scroll effects
│   └── images/                # Immagini statiche del tema
├── template-parts/
│   ├── hero.php               # Sezione Hero homepage
│   ├── problem.php            # Riconoscimento del problema
│   ├── steps.php              # Come funziona (3 passi)
│   ├── categories.php         # Cosa valutiamo e acquistiamo
│   ├── recent-objects.php     # Oggetti acquistati recentemente
│   ├── bottega.php            # La bottega / Bruno
│   ├── territory.php          # Territorio di operatività
│   ├── trust-signals.php      # Segnali di fiducia
│   └── contact-cta.php        # CTA finale
├── inc/
│   └── template-tags.php      # Helper functions
└── README.md
```

## Design System

| Elemento | Valore |
|----------|--------|
| Font titoli | Libre Baskerville |
| Font testo | Lato |
| Sfondo | `#F6F1E8` (avorio caldo) |
| Testo | `#2B2B2B` (antracite) |
| CTA | `#8C3A2B` (rosso mattone) |
| Accento | `#B89A5B` (oro antico) |

## Placeholder immagini

Tutte le immagini sono placeholder con indicazioni su:
- Tipo di contenuto consigliato
- Formato / aspect ratio
- Dimensioni consigliate

Sostituire con foto reali della bottega, di Bruno e degli oggetti acquistati.

## Pagine da creare in WordPress

### Pagine principali
- Home (impostata come pagina statica)
- Valutazioni
- Cosa acquistiamo
- Oggetti acquistati
- Chi siamo
- Contatti (usa template "Pagina Contatti")

### Pagine servizio SEO (usano template "Pagina Servizio")
- Valutazione antiquariato Firenze (`/valutazione-antiquariato-firenze/`)
- Vendere oggetti antichi Firenze (`/vendere-oggetti-antichi-firenze/`)
- Acquisto oggettistica antiquariato Firenze (`/acquisto-oggettistica-antiquariato-firenze/`)
- Valutazione dipinti antichi Firenze (`/valutazione-dipinti-antichi-firenze/`)
- Acquisto antiquariato Toscana (`/acquisto-antiquariato-toscana/`)

### Pagine categorie
- Vendere argenteria antica
- Vendere quadri antichi
- Vendere sculture e oggetti d'arte
- Vendere modernariato
- Vendere arredi antichi
- Vendere oggettistica antica

## Note tecniche

- Nessuna dipendenza da plugin (form contatto sostituibile con CF7 o WPForms Lite)
- Nessun framework JS, nessun build step
- Google Fonts caricati via `wp_enqueue_style`
- WhatsApp flottante integrato nel footer
- Tutte le informazioni di contatto gestibili dal Customizer
- SEO-friendly: un solo H1 per pagina, gerarchia semantica, alt text placeholder pronti

## Licenza

GPL v2 o successiva
