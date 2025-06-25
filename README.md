# SivaTeja WordPress Theme

A clean, modern, and responsive WordPress theme that works both as a static website and a full WordPress theme with Elementor support.

## Features

- ✅ **Dual Purpose**: Works as both static HTML website and WordPress theme
- ✅ **Responsive Design**: Looks great on all devices
- ✅ **Elementor Compatible**: Full support for Elementor page builder
- ✅ **Modern CSS**: Clean, modern styling with CSS Grid and Flexbox
- ✅ **SEO Optimized**: Proper HTML structure and meta tags
- ✅ **Widget Ready**: Sidebar and footer widget areas
- ✅ **Custom Logo Support**: Easy logo integration
- ✅ **Navigation Menus**: Primary and footer menu locations
- ✅ **Post Thumbnails**: Featured image support
- ✅ **Translation Ready**: Internationalization support

## File Structure

```
├── index.html              # Static website homepage
├── style.css              # Main stylesheet (required)
├── functions.php          # WordPress theme functions (required)
├── theme.json            # Theme configuration
├── header.php            # WordPress header template
├── footer.php            # WordPress footer template
├── index.php             # WordPress main template
├── single.php            # Single post template (Elementor compatible)
├── page.php              # Page template (Elementor compatible)
├── sidebar.php           # Sidebar template
├── 404.php               # 404 error page template
├── parts/
│   ├── header.html       # HTML header component
│   └── footer.html       # HTML footer component
├── templates/
│   ├── index.html        # Static homepage template
│   ├── singular.html     # Static post template
│   ├── archive.html      # Static archive template
│   └── 404.html          # Static 404 template
├── patterns/
│   └── example.php       # Block patterns
├── styles/
│   └── example.json      # Style variations
├── screenshot.png        # Theme screenshot
└── README.txt           # WordPress theme info
```

## Installation

### As Static Website
1. Download the files
2. Open `index.html` in your web browser
3. No server required!

### As WordPress Theme
1. Download or clone this repository
2. Upload to `/wp-content/themes/` directory
3. Activate the theme in WordPress admin
4. Customize through Appearance > Customize

## Usage

### Static Website
- Open `index.html` for the homepage
- Navigate between pages using the menu
- All HTML templates are in the `templates/` folder
- Edit `style.css` to customize the design

### WordPress Theme
- Full WordPress functionality
- Compatible with Elementor page builder
- Customizable through WordPress Customizer
- Widget-ready sidebar and footer areas
- Custom logo and menu support

## Customization

### Colors
The theme uses CSS custom properties for easy color customization:
- Primary: `#2c3e50`
- Secondary: `#3498db`
- Dark Gray: `#34495e`
- Light Gray: `#f8f9fa`

### Typography
- System font stack for optimal performance
- Responsive font sizes
- Clean, readable typography

## Browser Support
- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers

## Contributing
1. Fork the repository
2. Create your feature branch
3. Commit your changes
4. Push to the branch
5. Create a Pull Request

## License
This theme is licensed under the GPL v2 or later.

## Author
**SivaTeja**
- GitHub: [@shivateja1602](https://github.com/shivateja1602)

## Changelog

### Version 1.0
- Initial release
- Static HTML website functionality
- WordPress theme compatibility
- Elementor support
- Responsive design
- Modern CSS styling
