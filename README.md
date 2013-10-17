unixgroup
=========

Self Serve UNIX Group Administration

TODO
====
This is a general list of things that need to be done. Feel free to do it if someone else hasn't taken it.

General
-------
- Need templates (or preferably, Views) for rendering the start and end of the page
- Add in Bootstrap
- We need a schema for how we're storing group administrators. We decided on a MySQL database since PHP plays 
nicely with that. 
- Loading files via PHP __autoload or via something like Composer.

Views
-----
- Render a form for the login view
- We need a view for the "Dashboard" or whatever we want to call that page. And also possible sub-Views for 
other components.

Controllers
-----------
- We need an LDAP controller for handling authentication
- We need to a way to speak to the as-of-yet-unmade backend
- We need a DAO for speaking to our database

Models
------
- We need model representations of the data in our database. This is easy since it's just what matches up in
the database, except in PHP!