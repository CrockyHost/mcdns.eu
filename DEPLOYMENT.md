# Shared Hosting Deployment

This application is designed to run on cPanel-style shared hosting without SSH
or terminal access on the production server. GitHub Actions builds the PHP
dependencies and deploys the application through FTPS.

## One-time cPanel setup

1. Select PHP 8.4 or a newer compatible PHP version for the domain.
2. Keep the domain document root at the FTP account home directory. The root
   `.htaccess` file routes every request internally to `public` and prevents
   directory listings, so the application source is not exposed.
3. Create a MySQL database and user with cPanel's MySQL Database Wizard.
4. Use File Manager to create `.env` beside `composer.json`, using
   `.env.example` as the template. Do not upload or commit this file.
5. Make the `var` directory writable by the PHP process.

The `.env` file contains all environment-specific application settings,
including database and Cloudflare credentials. The deployment workflow never
uploads or deletes it.

## GitHub deployment secrets

Add these repository secrets in GitHub under Settings, Secrets and variables,
Actions:

| Secret | Description |
| --- | --- |
| `FTP_SERVER` | FTPS server hostname supplied by the hosting provider. |
| `FTP_PORT` | FTPS port, usually `21` or `990`. |
| `FTP_USERNAME` | FTPS username. |
| `FTP_PASSWORD` | FTPS password. |
| `FTP_SERVER_DIR` | Absolute remote directory for the application, ending with `/`. |

After adding the secrets, create a repository variable named `DEPLOY_ENABLED`
with the value `true`. Every push to `main` then builds production dependencies
and deploys through FTPS. The workflow can also be started manually from the
Actions tab.
