# Dev_Notes (PHP)

## What's Project Needs to do?

- List the notes
- Get informations of a only note
- Insert a new note
- Update a note
- Delete a note

### Frontend

The frontend of the app was not maden yet, so can not be accessed.

### Backend (API)

This is a api that the service is to be a crud of notes.

This was maden in structural PHP. So will be accessed by the PHP files. All the response of the api is in JSON(JavaScript Object Notation).

The app use a database maden in mysql called devnotes and every note has:
- id
- title
- body

To test the api you can access `base_url/api/ping.php` ny GET method. The response will be a error(empty if all works), a result(error and result are default) with a pong equals true.