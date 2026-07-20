# mcdns.eu

An open-source platform for allocating Minecraft addresses in the form of
`<name>.mcdns.eu`. The project will use the Cloudflare API to manage the DNS
records required to route players to Minecraft servers running on non-standard
ports, without requiring players to specify a port when connecting.

## Technology

- PHP 8.4+
- Symfony 8.1
- Doctrine ORM
- Cloudflare API (planned integration)

## Local development

```bash
composer install
php -S localhost:8000 -t public
```

During development, configure secrets, including the Cloudflare token, only in
local environment files. These files are not tracked by Git.

## License

This project is licensed under the [MIT License](LICENSE).
