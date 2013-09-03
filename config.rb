# Require any additional compass plugins here.

# Tell compass where to find local extensions
# If you followed directions and ran 'gem install modular-scale' comment the next two lines out:
extensions_dir = "vendor/anila/extensions"

Compass::Frameworks.register('modular-scale', :path => File.expand_path("#{extensions_dir}/modular-scale"))

# Uncomment these to use regular Ruby gems.
# require 'modular-scale'
# require 'sassy-math'

# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "css"
sass_dir = "vendor"
images_dir = "img"
javascripts_dir = "js"
fonts_dir = "fonts"

# output_style = :nested
# output_style = :extended
# output_style = :compact
output_style = :compressed

# To enable relative paths to assets via compass helper functions. Uncomment:
# relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
line_comments = false
color_output = false


# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sass
preferred_syntax = :scss
