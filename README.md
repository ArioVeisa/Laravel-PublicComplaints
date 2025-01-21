# Laravel Public Complaints

A Laravel-based public complaint management system to facilitate reporting and tracking of public issues efficiently.

## Features

1. **User Authentication**
   - Register, login, and logout functionality.

2. **Report Management**
   - Submit reports with title, description, and location details.
   - Attach images to reports.
   - View submitted reports.

3. **Report Status Tracking**
   - Track the status of reports (e.g., Pending, In Progress, Completed, Rejected).

4. **Category Management**
   - Categorize reports by type (e.g., environmental, infrastructure).

5. **Admin Dashboard**
   - Manage reports and update their status.
   - View statistics of submitted complaints.

6. **Geolocation Support**
   - Capture and store the latitude, longitude, and address of reports.

---

## Setup

1. Clone the repository:
   ```bash
   git clone https://github.com/ArioVeisa/Laravel-PublicComplaints.git
   ```

2. Navigate to the project directory:
   ```bash
   cd Laravel-PublicComplaints
   ```

3. Install dependencies:
   ```bash
   composer install
   ```

4. Copy the example environment file and set up your environment:
   ```bash
   cp .env.example .env
   ```

5. Generate application key:
   ```bash
   php artisan key:generate
   ```

6. Configure your database in the `.env` file.

7. Run migrations:
   ```bash
   php artisan migrate
   ```

8. Serve the application:
   ```bash
   php artisan serve
   ```

---

## Usage

1. Access the application in your browser at `http://localhost:8000`.
2. Register a new account or log in to submit a complaint.
3. Admin users can log in to the dashboard to manage reports.

---

For more information or contribution guidelines, feel free to contact the repository owner.
