# Blog Post Application

A Laravel-based blog post application with role-based access and permissions for three types of users: normal users, signed users, and admin users. It is a Laravel-based blog post application with full CRUD (Create, Read, Update, Delete) functionality, featuring role-based access and permissions for three types of users: normal users, signed users, and admin users.

## Table of Contents

- [Features](#features)
  - [User Roles](#user-roles)
  - [Pages](#pages)
  - [Responsive Design](#responsive-design)
- [Installation](#installation)
- [Usage](#usage)
- [Technologies Used](#technologies-used)
- [License](#license)

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

- **Edit Post**: Users can only edit their own posts, while admins can edit any post. Permissions are enforced to prevent unauthorized edits, ensuring content integrity and security.

- **Delete Post**: Similar to editing, users can only delete their own posts, while admins have full control to delete any post. This role-based access control prevents accidental or malicious deletions by unauthorized users.
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
   - Allows existing users to log in to the application.
   - Ensures secure access based on user credentials.

7. **Register Page**:
   - Allows new users to register an account in the application.
   - Provides access to signed-in user features after registration.

8. **Logout**:
   - Enables users to securely log out of the application and terminate their session.

### Responsive Design

The application is styled with **Bootstrap**, making it fully responsive and compatible with any type of device or screen size. Users can experience seamless functionality whether on a desktop, tablet, or mobile device.

## Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/yourusername/blog-post-app.git
   cd blog-post-app
