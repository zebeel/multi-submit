## Installation guide
    1. clone project
    2. cd to project root dir(multi-submit)
    3. config database in .env
    4. run command: php artisan migrate 
    5. start server: php artisan serve
    6. access app with any browser, typically the link is http://127.0.0.1:8000/new-user

## Idea of solution
    1. In backend
        When the form is displayed, a random and unique string call 'register code' is generated with its status is false.
        When form data save to DB, the 'register code' will be checked, if the status of 'register code' is false it will be set to true then saving process will be continued. If status is true, the process will be passed. 
    2. In frontend
        When form is submitted, disable the submit button, → no more same form be submitted
