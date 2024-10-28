# Blog Post Application

A Laravel-based blog post application with role-based access and permissions for three types of users: normal users, signed users, and admin users. It is a Laravel-based blog post application with full CRUD (Create, Read, Update, Delete) functionality, featuring role-based access and permissions for three types of users: normal users, signed users, and admin users.

## Table of Contents

- [Features](#features)
  - [User Roles](#user-roles)
  - [Pages](#pages)
- [Installation](#installation)
- [Usage](#usage)
- [Technologies Used](#technologies-used)
- [License](#license)

## Features

### User Roles

1. **Normal Users**:
   - Can view all posts on the **Welcome** page.
   - Cannot create, edit, or delete any posts.

2. **Signed Users**:
   - Can view all posts on the **Welcome** page.
   - Can access the **My Posts** page to view, create, edit, and delete only their own posts.
   - Cannot access posts created by other users on the **My Posts** page.
   
3. **Admin Users**:
   - Can view all posts on the **Welcome** page.
   - Can access the **My Posts** page to view, create, edit, and delete their own posts.
   - Can access the **All Posts** page to view, edit, or delete any post created by any user.

### Pages

1. **Welcome Page**:
   - Accessible to all users, whether logged in or not.
   - Displays all public blog posts.
   - Acts as a landing page with general information and a list of posts.

2. **My Posts Page**:
   - Accessible to signed-in users only.
   - Displays posts created by the logged-in user.
   - Allows users to create, edit, and delete their own posts.
   - Admins can also access this page to manage their personal posts.

3. **All Posts Page**:
   - Restricted to admin users only.
   - Displays all posts created by any user.
   - Allows admins to edit or delete any post, offering full control over content management.

4. **Sign In Page**:
   - Allows existing users to log in to the application.
   - Ensures secure access based on user credentials.

5. **Register Page**:
   - Allows new users to register an account in the application.
   - Provides access to signed-in user features after registration.

6. **Logout**:
   - Enables users to securely log out of the application and terminate their session.

## Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/yourusername/blog-post-app.git
   cd blog-post-app
