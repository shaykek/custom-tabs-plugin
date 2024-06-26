# custom-tabs-plugin

## Description

A simple WordPress plugin that displays tabs using a shortcode from an ACF repeater field.

## Installation

1. **Download the Plugin:**
   - Clone or download the repository to your local machine.

     ```sh
     git clone https://github.com/shaykek/custom-tabs-plugin
     ```

2. **Upload to WordPress:**
   - Upload the `custom-tabs-plugin` folder to the `/wp-content/plugins/` directory.

3. **Activate the Plugin:**
   - Go to the WordPress admin dashboard.
   - Navigate to `Plugins` > `Installed Plugins`.
   - Find `custom-tabs-plugin` and click `Activate`.

## Usage

1. **Add Shortcode to Page or Post:**
   - Use the `[custom_tabs]` shortcode in your post or page to display the tabs.

## Compiling SCSS to CSS

1. **Install Node.js and npm:**
   - Ensure you have Node.js and npm installed on your machine.
2. **Navigate to Plugin Directory:**
   - Open your terminal and navigate to the plugin directory.

     ```sh
     cd path/to/custom-tabs-plugin
     ```

3. **Initialize npm and Install Dependencies:**
   - Initialize your project (if not already initialized)

     ```sh
     npm install
     ```

4. **Compile SCSS to CSS:**
   - Use the following npm script to compile  `style.scss` to `style.css` and watch for changes.

     ```sh
     npm run sass
     ```
