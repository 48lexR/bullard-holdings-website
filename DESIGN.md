# Design

The purpose of this document is to serve as a description and discussion of the specifications for this project.

## Part 1: Project Description

**Purpose:** The purpose of this project is to provide a reliable, full-stack website that hosts all of the properties of Bullard Holdings, LLC for potential renters to see. 

**Requirements:** It should have a UI that is easy to use and fast. It should support dynamically adding, removing, and updating properties. The properties should be searchable as well.

## Part 2: Functional Specification

When a user visits the website, they should see a natural UI with links to navigation, including "About," "Properties," and "Login."

The "About" menu should provide a detailed description of Bullard Holdings, LLC.

The "Properties" menu should provide a list of properties and a search bar.

"Login" should be reserved only for administrators. When an administrator logs in, it should redirect to an administrator page.

## Part 3: Technical Specification

The most obvious choice for this project is the LAMP stack: Linux, Apache, MySQL, and PHP. Most of this data is static and the overhead of a restful API could slow down the site's frontend. 

The entire tech stack should be packaged as a single docker container. Instead of MySQL, I will use MariaDB, since it is faster and just a fork of MySQL. 
