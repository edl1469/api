# Campus Authentication API

This API allows registered users to authenticate the campus community via an API URL. Once registered, the user is given a unique API Token which must
be included as one of 3 POST parameters (BeachID and Password are the other 2). Posting these values to the API URL will return a simple true
or false response from the API. Users can then incorporate this process into their own applications.

## Getting Started

URL for registration to follow.


End with an example of getting some data out of the system or using it for a little demo

## Running the tests

Use any HTTP request simulation tool (Postman, Insomnia, etc.). Pass the necessary parameters, including the API Token to test the call. You should get back a true or false response depending on the accuracy of the data submitted.

## Built With

* [Laravel](https://laravel.com/) - The web framework used
* [Composer](https://getcomposer.org/) - Dependency Management

## Versioning

We use [GitHub](https://code.csulb.edu) for versioning. 

## Authors

* **Edward Lara** - *Initial work* 

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Thanks to YouTube contributors for showing me the ropes with API Tokens and Laravel.
