
# XAMPP Configuration Guide for Nyarch Linux (Arch-based)
This guide documents how to connect a project located in a private directory to the XAMPP web server and fix common permission/executable issues.

---
## 1. Project Directory & Path Mapping
Instead of moving files into `/opt/lampp/htdocs`, we use a symbolic link to keep the project in the `Documents` folder for easier development and Git management.

* **Command to link project:**
  ```bash
  sudo ln -s /home/fabiojoseph/Documents/appdev /opt/lampp/htdocs/appdev
    ```

---
## 2. Linux Permissions (The Traversal Fix)

On Arch Linux, the Apache user (`daemon`) cannot enter your home directory by default. You must grant "execute" permissions to the path leading to your files.

* **Open the "Gates":**
```bash
chmod o+x /home/fabiojoseph
chmod o+x /home/fabiojoseph/Documents

```


* **Grant Read Access to Project:**
```bash
chmod -R o+rX /home/fabiojoseph/Documents/appdev

```


---
## 3. Fix PHP Executable for VS Code

XAMPP on Arch often fails to launch its PHP binary due to missing dependencies or symlink issues.

* **Install Compatibility Library:**
```bash
sudo pacman -S libxcrypt-compat

```


* **VS Code Settings (`.vscode/settings.json`):**
Ensure you point directly to the binary, not the symlink.
```json
{
    "php.debug.executablePath": "/opt/lampp/bin/php-8.2.12",
    "php.validate.executablePath": "/opt/lampp/bin/php-8.2.12"
}

```


---
## 4. Starting XAMPP Services

You can manage services via the CLI or the GUI manager.

* **Start all services (CLI):**
```bash
sudo /opt/lampp/lampp start

```


* **Launch XAMPP GUI:**
```bash
cd /opt/lampp && sudo ./manager-linux-x64.run

```


---
## 5. Debugging Checklist

* **403 Forbidden:** Apache cannot read the folder. Re-run permission commands in Step 2.
* **404 Not Found:** The symlink in `/opt/lampp/htdocs` is broken or pointing to the wrong folder.
* **Browser Already Running:** A previous debug session locked the port. Run `pkill brave`.




```