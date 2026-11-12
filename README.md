# WIE NSBM Website

The website for the **IEEE Women in Engineering (WIE)** student branch at **NSBM Green University**. It was built on WordPress 5.3 and exported to static HTML with the Simply Static plugin, so it can be hosted without PHP or a database.

## What's in the repo

| Path | What it is |
|---|---|
| `index.html`, `home/`, `feed/`, `comments/` | Static export of the site (ready to host) |
| `wp-admin/`, `wp-includes/`, `wp-content/`, `wp-*.php` | The WordPress install used to build and edit the site |
| `wp-content/plugins/simply-static` | Plugin that generates the static export |
| `dashboard/`, `xampp/` | XAMPP local server files |

## Editing the site

1. Install [XAMPP](https://www.apachefriends.org/) and copy this folder into `htdocs/`.
2. Create a MySQL database named `wie-nsbm_db` and import the site's database.
3. Copy `wp-config-sample.php` to `wp-config.php` and fill in your local database details.
4. Open `http://localhost/WIE-NSBM/wp-admin`, edit the content, then run **Simply Static → Generate** to refresh the static files.

## Hosting the static site

The site was published at `https://ieee-student-branch-nsbm.github.io/WIE-NSBM/`. The exported HTML at the root works on any static host (GitHub Pages, Firebase Hosting, Netlify). Only the static files need to be published, not the WordPress sources.
