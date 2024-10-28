# Blog Post Application

A Laravel-based blog post application with role-based access and permissions for three types of users: normal users, signed users, and admin users. It is a Laravel-based blog post application with full CRUD (Create, Read, Update, Delete) functionality, featuring role-based access and permissions for three types of users: normal users, signed users, and admin users.

## Table of Contents

- [Features](#features)
  - [User Roles](#user-roles)
  - [Secure Post Management](#secure-post-management)
  - [Pages](#pages)
  - [Responsive Design](#responsive-design)
- [Usage](#usage)
- [Technologies](#technologies)
- [Installation](#installation)

## Features

### User Roles

1. **Normal Users**:

<div align="center">
  <img src="https://github.com/user-attachments/assets/5dc93f35-62a6-476b-9a0e-542ee765729f" alt="Page 6 - Normal User Functions" height="400">
  <p><em>Figure 1: Normal User Functions</em></p>
</div>

   - Can view all posts on the **Welcome** page.
   - Cannot create, edit, or delete any posts.

2. **Signed Users**:

<div align="center">
  <img src="https://github.com/user-attachments/assets/e949f628-2303-47f3-9752-6aab40941b61" alt="Page 6 - Normal User Signed Functions" height="400">
  <p><em>Figure 2: Normal Signed User Functions</em></p>
</div>

   - Can view all posts on the **Welcome** page.
   - Can access the **My Posts** page to view, create, edit, and delete only their own posts.
   - Cannot access posts created by other users on the **My Posts** page.
   
3. **Admin Users**:

<div align="center">
  <img src="https://github.com/user-attachments/assets/544da992-5351-4621-82b6-e8662feaab3d" alt="Page 7 - Admin User Functions" height="400">
  <p><em>Figure 3: Admin User Functions</em></p>
</div>

   - Can view all posts on the **Welcome** page.
   - Can access the **My Posts** page to view, create, edit, and delete their own posts.
   - Can access the **All Posts** page to view, edit, or delete any post created by any user.

### Secure Post Management

The application ensures secure handling of post creation, editing, and deletion with strict role-based permissions:

- **Add New Post**: Only signed users and admin users can add new posts, with validation checks to ensure that content meets required standards.
  
    <div align="center">
      <img src="https://github.com/user-attachments/assets/59dd1a97-7792-4231-bd74-df02a0e89b48" alt="Page 8 - Adding New Post" height="400">
      <p><em>Figure 5: Adding a New Post</em></p>
    </div>

- **Edit Post**: Users can only edit their own posts, while admins can edit any post. Permissions are enforced to prevent unauthorized edits, ensuring content integrity and security.

    <div align="center">
      <img src="https://github.com/user-attachments/assets/93c51245-ec74-4817-b511-ca8df758686b" alt="Page 4 - Edit a Post" height="400">
      <p><em>Figure 6: Edit a Post</em></p>
    </div>

- **Delete Post**: Similar to editing, users can only delete their own posts, while admins have full control to delete any post. This role-based access control prevents accidental or malicious deletions by unauthorized users.

     <div align="center">
      <img src="https://github.com/user-attachments/assets/03d2d0d0-e930-4b1a-84d3-c27267df756e" alt="Page 5 - Delete a Post" height="400">
      <p><em>Figure 7: Delete a Post</em></p>
     </div>

  
### Pages

1. **Welcome Page**:

<div align="center">
  <img src="https://github.com/user-attachments/assets/544da992-5351-4621-82b6-e8662feaab3d" alt="Page 7 - Admin User Functions" height="400">
  <p><em>Figure 4: Welcone Page</em></p>
</div>

   - Accessible to all users, whether logged in or not.
   - Displays all public blog posts.
   - Acts as a landing page with general information and a list of posts.

2. **My Posts Page**:

<div align="center">
  <img src="https://github.com/user-attachments/assets/ad581e1f-c45e-43eb-8987-8bf0dfa7efe6" alt="Page 3 - Posts Available for Given User" height="400">
  <p><em>Figure 5: My Post Page</em></p>
</div>

   - Accessible to signed-in users only.
   - Displays posts created by the logged-in user.
   - Allows users to create, edit, and delete their own posts.
   - Admins can also access this page to manage their personal posts.

3. **All Posts Page**:

<div align="center">
  <img src="https://github.com/user-attachments/assets/6eeefc48-6f9a-41e4-a8e0-5f594b500d4f" alt="Page 2 - View All Posts" height="400">
  <p><em>Figure 6: View All Posts</em></p>
</div>

   - Restricted to admin users only.
   - Displays all posts created by any user.
   - Allows admins to edit or delete any post, offering full control over content management.

6. **Sign In Page**:

<div align="center">
  <img src="https://github.com/user-attachments/assets/22022d56-779a-48cc-8e39-df14e7d73b8d" alt="Login Page" height="400">
  <p><em>Figure 7: Login Page</em></p>
</div>

   - Allows existing users to log in to the application.
   - Ensures secure access based on user credentials.

8. **Register Page**:

<div align="center">
  <img src="https://github.com/user-attachments/assets/f1abe74f-483f-4d34-ba6d-94eebcfbc806" alt="Register Page" height="400">
  <p><em>Figure 8: Register Page</em></p>
</div>

   - Allows new users to register an account in the application.
   - Provides access to signed-in user features after registration.

10. **Logout**:
   - Enables users to securely log out of the application and terminate their session.

### Responsive Design

The application is styled with **Bootstrap**, making it fully responsive and compatible with any type of device or screen size. Users can experience seamless functionality whether on a desktop, tablet, or mobile device.

| <img src="https://github.com/user-attachments/assets/26b4cb4e-f6a5-407d-b28a-703e8ee4884b" alt="Welcome Page Mobile" width="300" /> | <img src="https://github.com/user-attachments/assets/3798cd97-abf6-4ba8-8c00-1f310995fbed" alt="Add New Post Mobile" width="300" /> | <img src="https://github.com/user-attachments/assets/6bd85e59-3e46-46e9-9267-c487dad5d281" alt="All Posts in Mobile" width="300" /> |
|:--:|:--:|:--:|
| **Figure 9:** Welcome Page Mobile | **Figure 10:** Add New Post Mobile | **Figure 1:** All Posts in Mobile |

## Usage

After the application is running:

- **Normal Users**:
  - View all blog posts on the **Welcome** page without needing to log in.

- **Signed Users**:
  - Register or log in to access additional features on the **My Posts** page, where they can manage their own posts.

- **Admin Users**:
  - After logging in, they have access to all posts and the ability to manage any post on the **All Posts** page.

## Technologies

- **Backend**: Laravel
- **Database**: MySQL (or any database supported by Laravel)
- **Frontend**: Laravel Blade files (CSS, HTML)

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/blog-post-app.git
   cd blog-post-app

2. Install dependencies:
   ```bash
   composer install

3. Generate application key:
   ```bash
   php artisan key:generate

4. Run migrations:
   ```bash
   php artisan migrate

5. Start the development server:
   ```bash
   php artisan migrate

