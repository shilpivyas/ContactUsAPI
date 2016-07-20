# ContactUsAPI

I have used REST to create this contact us API.
The were some problem with sharing my project in here, so I have uploaded file I made changes in as well as zip of the whole cakePHP project, sorry for the inconvience

Contact Us page is submitted using AJAX request.

I have uploaded the database
1) Want ajax and server side validation. : Used jQuery Validate for client side validation
2) Success message on top of form.
3) List of messages sent with pagination. : Created and index page with pagination displaying messages. Created another page for the API that return JSON response. You can access this using the menu given on top called 'Contact Us Requests' and 'Contact Us Requests - API'.
Response for the API is also paginated, so to access response the URL would be like <base_url>/contacts.json?page=3&sort=Contacts.id&direction=desc
4) Send email using smtp. as well, it's called test.sql. To use this database you'll have to make changes in app.php file (<project_name>/config/app.php). In this file in "Datasources" update your MySQL username, MySQL password and database name.

As per our discussion I have made the updates in the assignment.<br />
1) Want ajax and server side validation. : Used jQuery Validate for client side validation<br />
2) Success message on top of form.<br />
3) List of messages sent with pagination. : Created a table that displays all the messages received with pagination. As for the API I have passed on messages received as JSon as well. The JSon response is paginated too, so you can access it like - <base_url>/contacts.json?page=2&sort=Contacts.id&direction=desc <br />
4) Send email using smtp. : For this task you will have to make a few changes in app.php file (<project_name>/config/app.php). In EmailTransport update -<br />
  className to 'Smtp',
  host to 'ssl://smtp.gmail.com',
  port to 465,
  username to Email ID of the account through which you want to send mails,
  password to oassword of the above mentioned email account
