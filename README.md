<img alt="Drupal Logo" src="https://alphatilesapps.org/img/ATlogo.png" height="80px">

# **Alpha Tiles Drupal Site**

Alpha Tiles is a platform designed to enhance literacy by providing engaging, customizable games and resources for language learning. This Drupal site powers the Alpha Tiles ecosystem, enabling administrators to manage content, localization, and game configurations efficiently.

Visit the official website: [alphatilesapps.org](https://alphatilesapps.org/index.html).

---

## **Getting Started**

Follow these steps to set up the Alpha Tiles Drupal site on your local development environment.

### **Prerequisites**

Ensure you have the following installed:
- PHP 8.1 or higher
- Composer
- A web server like Apache or Nginx
- A database server like MySQL or MariaDB
- Drush (optional but recommended for command-line Drupal management)

---

### **Installation Steps**

#### **1. Clone the Repository**
```bash
git clone <repository-url> alphatiles-drupal
cd alphatiles-drupal
```

#### **2. Install Dependencies**
Run Composer to install the necessary Drupal core files, modules, and libraries.
```bash
composer install
```

#### **3. Create Configuration Files**
Set up the necessary configuration files:
1. **`settings.php`**:
   - Copy the default settings file.
   ```bash
   cp web/sites/default/default.settings.php web/sites/default/settings.php
   ```
   - Update the database connection settings in `settings.php`.

2. **`services.yml`**:
   - Copy the default services file.
   ```bash
   cp web/sites/default/default.services.yml web/sites/default/services.yml
   ```

3. **Local Development Configuration**:
   - Create a `settings.local.php` file for your local environment.
   ```bash
   cp web/sites/default/example.settings.local.php web/sites/default/settings.local.php
   ```
   - Enable the inclusion of `settings.local.php` in `settings.php`:
     ```php
     if (file_exists(__DIR__ . '/settings.local.php')) {
         include __DIR__ . '/settings.local.php';
     }
     ```

4. **`files` Directory**:
   - Ensure the `web/sites/default/files` directory exists and is writable.
   ```bash
   mkdir -p web/sites/default/files
   chmod -R 755 web/sites/default/files
   ```

#### **4. Set Up the Database**
- Create a database for the project (e.g., `alphatiles`).
- Import the database dump if provided:
  ```bash
  mysql -u <username> -p <database_name> < dump.sql
  ```

#### **5. Run Drupal Installation**
Install the site using Drush:
```bash
drush site:install --db-url=mysql://<username>:<password>@localhost/<database_name> --site-name="Alpha Tiles"
```
Alternatively, use the web-based installer by navigating to `http://localhost` in your browser.

---

### **Development Workflow**

#### **Extending Functionality**
- Use Composer to add modules and themes:
  ```bash
  composer require drupal/<module_name>
  ```

#### **Export Configuration**
- Export changes to configuration files to version control:
  ```bash
  drush config:export
  ```

#### **Import Configuration**
- Import configuration from version control:
  ```bash
  drush config:import
  ```

---

## **Project Structure**

```
alphatiles-drupal/
├── composer.json      # Composer dependencies
├── composer.lock      # Lock file for dependency versions
├── drush/             # Drush configuration and files
├── web/
│   ├── core/          # Drupal core files
│   ├── modules/       # Custom and contributed modules
│   ├── sites/         # Site-specific configuration
│   ├── themes/        # Custom and contributed themes
│   ├── index.php      # Drupal entry point
├── vendor/            # Composer-managed dependencies
```

---

## **Changelog**

Track all significant changes to the project in `CHANGELOG.md`.

---

## **Contributing**

Contributions are welcome! Please create a new branch for your feature or bug fix and submit a pull request for review. Ensure all configurations are exported and committed.

---

## **Support**

For issues or questions, contact the Alpha Tiles team or visit the official website: [alphatilesapps.org](https://alphatilesapps.org/index.html).

