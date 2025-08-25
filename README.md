# Roaem Public School — PHP/MySQL Website & Admin Panel

A simple school website with a public-facing site (home, about, admissions, contact, notices, results) and an admin panel to manage content, students, results, and notices. Built with **plain PHP (mysqli)**, **MySQL/MariaDB**, and vanilla **HTML/CSS/JS**.

> ⚠️ **Important:** This code is intended for learning/demos. Passwords are stored in plain text and many SQL queries are not parameterized. **Do not deploy to the public internet** without hardening (see *Security Notes*).

---

## ✨ Features

**Public site (`/user/php/`):**

* Home, About, Notices
* Admissions form (per class) → writes to DB
* Contact form → writes to DB
* View Results (Class 1–10; multiple tests per class)

**Admin panel (`/Administrater/php/`):**

* Admin login & session-protected dashboard
* Manage About content
* Manage Notices (create/update)
* Review Admission & Contact requests
* Manage Students (class-wise info)
* Enter/Edit Results (Class 1–5, 6–10)
* Add Admin users

---

## 🗂️ Project Structure (trimmed)

```
roaem_school_main/
└─ roaem_school_main/
   ├─ Administrater/
   │  ├─ css/ ...
   │  ├─ js/
   │  └─ php/
   │     ├─ AdminLogin.php         # Login form
   │     ├─ Amain.php              # Admin dashboard (requires session)
   │     ├─ Anav.php               # Admin nav
   │     ├─ Anotice.php            # Manage notices
   │     ├─ Aresult.php            # Results landing
   │     ├─ Astudent.php           # Students landing
   │     ├─ Astudentedit*.php      # Edit students info
   │     ├─ Asignup.php            # Add admin user
   │     ├─ login.php / Alogout.php
   │     ├─ set_marks1to5.php / set_marks6to10.php
   │     └─ partials/
   │        ├─ db_connect.php              # admins DB (auth)
   │        ├─ aboutDB_connect.php         # about DB
   │        ├─ noticeDB_connect.php        # notice DB
   │        ├─ contactDB_connect.php       # contact DB
   │        └─ addmissionDB_connect.php    # admissions DB
   │
   ├─ user/
   │  ├─ css/, js/, photo/
   │  └─ php/
   │     ├─ Umain.php, Uabout.php, Unotice.php
   │     ├─ Uaddmission.php, Uaddmission2.php
   │     ├─ Ucontact.php, Uresult.php
   │     ├─ choose_test*.php, show_result*_.php
   │     └─ nav.php, Ufooter.php
   │
   └─ pre_run/
      ├─ main.php/                   # (Folder named "main.php" — intentional)
      │  ├─ create_all_db.php        # Creates DBs & tables
      │  ├─ student info 1 to 10th.php  # Seeds student info
      │  └─ sample_result.php        # Seeds sample results
      └─ partials/                   # (supporting scripts, if any)
```

---

## 🧰 Tech Stack

* **PHP** (mysqli, no framework)
* **MySQL/MariaDB** (multiple DBs: admins, about, notice, contact\_request, addmission, roaem\_database, result\_class1..10)
* **HTML/CSS/JS** (vanilla)

---

## 🚀 Quick Start (Local)

### Option A: XAMPP / WAMP (Apache + MySQL)

1. Clone or copy this folder into your web root, e.g. `C:/xampp/htdocs/roaem_school_main/`.

2. Start **Apache** and **MySQL**.

3. Ensure MySQL credentials match the code defaults:

   ```php
   $servername = "localhost";
   $username   = "root";
   $password   = ""; // empty by default in XAMPP
   ```

   These appear in many files under `Administrater/php/partials/` and in `pre_run/main.php/*.php`.

4. Open the database bootstrap scripts in your browser **in this order** (adjust the base path as needed):

   * `http://localhost/roaem_school_main/pre_run/main.php/create_all_db.php`

   * `http://localhost/roaem_school_main/pre_run/main.php/student%20info%201%20to%2010th.php`

   * `http://localhost/roaem_school_main/pre_run/main.php/sample_result.php`

   * `http://localhost/roaem_school_main/roaem_school_main/Administrater/php/firstrunforadmin.php`

   > If you changed the folder name or nesting, update the URLs accordingly. The `pre_run/main.php` **is a folder**, not a file.

5. Visit the **public site**:

   * `http://localhost/roaem_school_main/roaem_school_main/user/php/Umain.php`

6. Visit the **admin login**:

   * `http://localhost/roaem_school_main/roaem_school_main/Administrater/php/AdminLogin.php`

### Option B: PHP built-in server (for quick demo)

```bash
php -S localhost:8000 -t roaem_school_main/roaem_school_main
```

Then visit:

* Public:  `http://localhost:8000/user/php/Umain.php`
* Admin:   `http://localhost:8000/Administrater/php/AdminLogin.php`

> You still need a running MySQL server and to run the **pre\_run** scripts once.

---

## 🔐 Default Admin Credentials (change ASAP)

After running `firstrunforadmin.php` the following user is seeded:

```
username: r
password: r1
```

**Change this immediately**:

* Log in, go to **Add Admin** (`Asignup.php`) to create a new admin.
* Then delete or update the default row in the `admins.password` table.

---

## 🗄️ Database Overview (created by scripts)

* **admins** → `password` (admin auth)
* **about** → `about_info` (about-page copy)
* **notice** → `notice_info` (subject/date/desc/sign)
* **contact\_request** → stores contact form submissions
* **addmission** → `addmision_request1` … `addmision_request10` (per-class admissions)
* **roaem\_database** → `student_info_class1` … `student_info_class10`
* **result\_class1** … **result\_class10** → for each class: `classX_1` … `classX_5` (test results)

> The admin result pages build the table name dynamically like `class{class}_{test}` inside the `result_class{class}` database.

---

## 🧭 Key Pages

**Public**

* `/user/php/Umain.php` (Home)
* `/user/php/Uabout.php` (About)
* `/user/php/Unotice.php` (Notices)
* `/user/php/Uaddmission.php` (Admission form – classes 1–5)
* `/user/php/Uaddmission2.php` (Admission form – classes 6–10)
* `/user/php/Ucontact.php` (Contact form)
* `/user/php/Uresult.php` → `choose_test*.php` → `show_result*_.php`

**Admin**

* `/Administrater/php/AdminLogin.php` → `/Administrater/php/Amain.php`
* `/Administrater/php/Anotice.php`, `/Administrater/php/Aabout.php`
* `/Administrater/php/Astudent.php`, `Astudentedit*.php`
* `/Administrater/php/Aresult.php`, `set_marks1to5.php`, `set_marks6to10.php`
* `/Administrater/php/Asignup.php` (add admin)

---

## ⚙️ Configuration

* **DB Credentials:** hard-coded in multiple files (`Administrater/php/partials/*.php` and `pre_run/main.php/*.php`).

  * For non-root MySQL users, search & replace `$username` / `$password` across the repo.
* **Paths:** Pages use relative includes; keep the folder structure as-is to avoid broken paths.

---

## 🧪 Test Data

Run the three scripts under `pre_run/main.php/` to seed:

* base databases & tables (`create_all_db.php`)
* student info (`student info 1 to 10th.php`)
* sample results (`sample_result.php`)

---

## 🖼️ Screenshots (add later)

Create a `docs/` folder and add screenshots/GIFs of:

* Public Home, Results, Admissions
* Admin Dashboard, Notices, Results entry, Students

Then reference them here in Markdown.

---

## 🛡️ Security Notes (for production hardening)

* **Passwords:** stored in plain text (table `admins.password`). Use hashing (e.g., `password_hash`) and verify via `password_verify`.
* **SQL Injection:** many raw SQL strings with interpolated user input. Switch to parameterized queries (mysqli prepared statements / PDO).
* **Auth:** add CSRF protection for forms; regenerate session IDs after login; set proper cookie flags.
* **Validation:** server-side validation for all forms; sanitize outputs (XSS).
* **DB Design:** consider consolidating DBs; use a single schema with proper relationships.
* **Config:** move credentials to a single config file (or environment variables) and require it everywhere.
* **Pre-run scripts:** remove or protect `pre_run/` and `firstrunforadmin.php` after setup.

---

## 🗺️ Roadmap / TODO

* [ ] Centralize DB config in one include (or `.env`)
* [ ] Migrate to prepared statements / PDO
* [ ] Password hashing + password reset flow
* [ ] Unified DB schema (one database) and migrations
* [ ] Basic roles/permissions beyond a single admin table
* [ ] Form validation & better error handling
* [ ] Add unit/integration tests
* [ ] Docker dev setup (PHP + MySQL) for easy onboarding

---

## 🤝 Contributing

1. Fork the repo
2. Create a feature branch: `git checkout -b feat/your-change`
3. Commit: `git commit -m "feat: add your change"`
4. Push: `git push origin feat/your-change`
5. Open a Pull Request

---

## 📄 License

Choose a license that fits your needs (e.g., MIT). Example:

```
MIT License — see LICENSE for details
```

---

## 🙏 Acknowledgements

* Static assets and icons as referenced in the code
* Built as a school website learning project (comments include helpful Hindi notes)

---

## 🧭 Maintainer Notes (nice-to-have)

* Add CI to run PHP linting and schema checks
* Document default MySQL versions you tested on (e.g., MySQL 8.0 / MariaDB 10.x)
* Add sample `.sql` export in `docs/` for quick import (optional)
