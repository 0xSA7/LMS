# LMS
Learning Management System

## UI & System Design
### design pages & auth
- site front

- dashboards
  - owner
  - admin
  - instructor
  - student

- forms
  - login
    - user (based on role there is going to be a redirection route)
  - register
    - student (owner or admins can approve registeration)
  - enroll
    - course (role: student)
  - add
    - admin (role: owner)
    - instructor (role: admin)
    - student (role: admin)
    - category (role: admin)
    - course (role: instructor)
    - course-content (role: instructor)
    - submission (role: student)
  - edit
    - admin (role: owner)
    - instructor (role: admin)
    - student (role: admin)
    - category (role: admin)
    - course (role: instructor)
    - course-content (role: instructor)
    - submission (role: student)
  - edit profile
    - owner (role: owner)
    - admin (role: admin)
    - instructor (role: instructor)
    - student (role: student)
  
- view
  - index
    - admins (show all, for owner)
    - instructors (show all & based on joins, for puplic)
    - students (show all & based on joins, for users)
    - categories (show all & based on joins, for public)
    - courses (show all & based on joins, for public)
    - materials/quizzes (show all & based on joins, for public)
    - submissions (show all & based on joins, for authorized student & instructors)
  - show profile
    - admin (based on id, for owner)
    - instructor (based on id & joins, for puplic)
    - student (based on id & joins, for users)
    - category (based on id & joins, for public)
    - course (based on id & joins, for public)
    - course-content (based on id & joins, for public)
    - submission (based on id & joins, for authorized student & instructors)

### design components
- header
- navbar
- dropdown
- breadcrumb
- sidebar
- table
- card
- form
- btns
- blank page
- err404 page
- footer