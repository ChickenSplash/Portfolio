$theme: ( // Declare a map of the commonly used theme colours
    "gray": #67809F,
    "yellow": #F7B322,
    "blue": #4183D7,
    "green": #2ECC71,
    "red": #D64541,
    "purple": #926FB1,
    "crimson": #F62459,
);

@mixin nav-bar-theme($theme) {
    @each $name, $color in $theme { // Extract the key and its associated value out of the $theme map
        &-#{$name} { // Selects the class using the key
            .theme { // Applies colours using the value of said key
                color: $color;
            }
            .triangle {
                border-color: $color transparent transparent transparent;
            }
            &:hover {
                background-color: $color;
            }
            &:hover .theme {
                color: #fff;
            }
            .nav-dropdown {
                background-color: color.adjust($color, $lightness: -10%);
            }
        }
    }  
}

.theme {
    @include nav-bar-theme($theme);
}