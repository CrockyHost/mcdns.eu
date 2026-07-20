# mcdns.eu

O platformă open-source pentru alocarea de adrese Minecraft de forma
`<nume>.mcdns.eu`. Proiectul va administra, prin API-ul Cloudflare, înregistrările
DNS necesare pentru a direcționa jucătorii către servere Minecraft care rulează
pe porturi non-standard, fără ca aceștia să fie nevoiți să specifice portul la
conectare.

## Tehnologii

- PHP 8.4+
- Symfony 8.1
- Doctrine ORM
- Cloudflare API (integrare planificată)

## Pornire locală

```bash
composer install
php -S localhost:8000 -t public
```

În dezvoltare, setează secretele (inclusiv tokenul Cloudflare) numai în
`.env.local`; acest fișier nu este versionat.

## Licență

Acest proiect este licențiat sub [MIT](LICENSE).
