//------------------------ README ------------------------------//

*** How to run the app ***

1 - Upload the entire project to the WWW directory of a local server (like Laragon or XAMPP for example).

2 - Using a browser, navigate to the project's public directory (usually https://localhost/phonecatalog/public)

*** Design and Architectural decisions ***

1 - I decided to use Laravel as a backend framework and VUE as a frontend framework because they work well together and they have an easy integration thanks to VITE.

2 - I used Bootstrap as my CSS framework for this project. Bootstrap is not regarded as the best option for VUE and I would usually implement either Bulma or Tailwind 
but, as the styles are not the main focus of this project, I chose Bootstrap because it is easy and lightweight.

3 - The project uses MVC architecture as it is the default architecture for Laravel development.

*** Challenges faced ***

1 - The project was quite simple and the main challenge was to develop easier ways to implement functionalities that usually require more dedicated solutions;

2 - Usually the Admin access would require an username and a password and the data would be stored in a database with the password hashed using either the Hash facade 
or the Bcrypt method but, as the project doesn't use a database and requires the Admin access to use just a password, I stored it in the .env file.

3 - The phone purchase functionality uses the default user "testUser" because the app doesn't have user registration, but in a regular project, one would need to implement
user authentication before integrating a purchase funtionality.

