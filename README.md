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

To create a note you can access `base_url/api/insert.php` by the POST method, and in the body of the request may have a title and a body. So the response may be a error(empty if all works) and a result with the inserted note.

To get all notes you can access `base_url/api/getall.php` by the GET method, and will get the id and the title of all notes in database. The response will be a error(empty if all works) and a result with all the id and title of all notes.

To get a only note you can access `base_url/api/get.php` by the GET method, and will get all informations of the note in database. In the query params may have a id of the note that you want to get. The response will be a error(empty if all works) and a result with the informations of the note.

To edit a note you can access `base_url/api/update.php` by the PUT method, and in the body of the method may have an id, a title and the body of the note, so will be updated in database the note with the id that comes from body of the request. The response will be a error(empty if all works) and a result with the informations of the note.

To delete a note you can access `base_url/api/delete.php` by the DELETE method, and in the request of the body may have an id. The response will be a error(empty if all works) and a result empty.
