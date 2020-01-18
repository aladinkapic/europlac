<p align="center"><img src="https://europlac-nekretnine.com/menu/images/logo.png" width="300"></p>


## Developer mode

### Content

This app contains couple of pages such as :

    - Home
    - All estates 
    - Estate preview
    - About us
    - Contact us

- As you are able to see, menu is synchronised with filters (dynamically created queries) for PHP. It caches data via storage[variables]. 
- Google maps is used to display location of objects.
- Swiper is used for slider preview of images
- Nearby places are connected and displayed over google map

### Deleting items

If we only need to delete one item, and after goto link where is not ID or similar keyword needed, only set 

    - url="@yield('delete-url')"
    
But if we need specific URL to go after it, there is a way to make custom route for it, adding extra parameters to set url via

    - extraId="@yield('delete-extra-id')"


## License
This project is open-sourced software licensed under the [live4science](https://live4science.com) licence.
