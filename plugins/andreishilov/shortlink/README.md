Usage
-------------

After installation, a button "Short link" appears in the top menu. 
The short links management interface allows you to add, edit and delete short links. The interface is intuitive and provides an ability to generate a short link code with a special button.

You can set code length for the generating button on the settings page of the plugin. Plugin setting you can find in the "Short Link" section.

After adding a short link you can share it where you want.
Link will be like http://{yoursite.com}/go/{code}, where {code} - generated unique code of your link.
When a visitor will open this link, he will be redirected with status 301 to your full link.

Use can use "beforeRedirect" event:
```php
use AndreiShilov\ShortLink\Models\Link;

Event::listen('andreishilov.shortlink.beforeRedirect', function (Link $link) {
   ...
});
```
Permissions
-------------

Plugin has two types of permissions:
 - plugin settings
 - editing short links list

Features
-------------
Plugin includes the possibility of generating random short links code using special algorithm.
The dictionary consists of latin alphabet, numbers and symbols of hyphen and underscore.  
Usually OctoberCMS installation has case-insensitive collation. In this case we have less amount of combinations.

Depending on the length of the code and the collation, a different amount combinations is possible:

Code length  | Combinations (cs) | Combinations (ci)
------------- | ------------- | -------------
3   | 262.144  |  54.872
4  | 16.777.216 | ‭2.085.136‬
5  | 1.073.741.824 | ‭79.235.168‬
6  | 68.719.476.736 | ‭3.010.936.384‬
7  | 4.398.046.511.104 | ‭114.415.582.592‬
  
So, the probability of coincidence when generating a new code is very low.
This guarantees protection against thoughtless parsing of links by a brute-force method.  


Extending and updates
-------------

October CMS has no recommendations about the charset and collation of database. The plugin uses default database charset of current website. Usually it is utf-8 with case-insensitive collation. 
Using different charset and collation for links table hadn't been tested for errors while extending the plugin and joining with other tables in different charsets.  

You can manually set binary collation to the column andreishilov_shortlink_links.code. All extensions and relations can be linked via id field, which is integer and unambiguous.  In general, case-insensitive collation for short links is more than enough for not-highload websites.

Notes
-------------
Plugin supports russian localization