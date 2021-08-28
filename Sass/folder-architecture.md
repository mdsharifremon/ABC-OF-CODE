## Sass folder structure
<pre>
sass/
|
|– abstracts/ (or utilities/)
|   |- __abstracts-dir.scss     # Import all abstracts .scss files
|   |– _variables.scss          # Sass Variables
|   |– _variables.scss          # Sass Variables
|   |– _functions.scss          # Sass Functions
|   |– _mixins.scss             # Sass Mixins
|
|– base/
|   |- __base-dir.scss          # Import all base .scss files
|   |– _reset.scss              # Reset/normalize
|   |– _typography.scss         # Typography rules
|
|– components/ (or modules/)
|   |_ __components-dir.scc     # Import all components .scss files
|   |– _buttons.scss            # Buttons
|   |– _carousel.scss           # Carousel
|   |– _slider.scss             # Slider
|
|– layout/
|   |_ __layout-dir.scc         # Import all layout .scss files
|   |– _navigation.scss         # Navigation
|   |– _grid.scss               # Grid system
|   |– _header.scss             # Header
|   |– _footer.scss             # Footer
|   |– _sidebar.scss            # Sidebar
|   |– _forms.scss              # Forms
|
|– pages/
|   |_ __pages-dir.scc          # Import all pages .scss files
|   |– _home.scss               # Home specific styles
|   |– _about.scss              # About specific styles
|   |– _contact.scss            # Contact specific styles
|
|– themes/
|   |_ __theme-dir.scc          # Import all theme .scss files
|   |– _theme.scss              # Default theme
|   |– _admin.scss              # Admin theme
|
|– vendors/
|   |_ __vendors-dir.scc        # Import all vendors .scss files
|   |– _bootstrap.scss          # Bootstrap
|   |– _jquery-ui.scss          # jQuery UI
|
`– main.scss                    # Main Sass file
</pre>
