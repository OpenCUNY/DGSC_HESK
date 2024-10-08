# DGSC_HESK
HESK customization for the DGSC HESK instance for form submission. 

## Language 
The folder `dgsc` in `language` enables one to change the text Hesk uses in generating pages. An obvious example is replacing 'ticket' with 'form' everywhere. 
To effect changes, open `text.php` and replace any string *on the right hand side* of the definitions as desired, then replace file on cPanel in the corresponding directory. 

Changes will not take effect if language is not set to `DGSC` in the admin panel. To do this, go to `Settings >> General >> Language >> Default Language`. If everything is set up correctly, you should see `DGSC` in the dropdown menu. For obvious reasons, keep `Multiple languages` off. 

Additional instructions: https://www.hesk.com/knowledgebase/?article=34

## Theme
Among other things, the folder `DGSC` in theme enables one to:
1) change the `CSS` used in generating the public-facing user panel of Hesk;
2) change the way tickets are formatted for printing by Hesk.

For the first, go to `/DGSC/customer/css/` and edit `app.min.css` (*not* app.css) as desired (e.g., using CUNY colors).

For the second, edit `print-ticket.php` in `/DGSC/`. The PHP variables refer straightforwardly to the columns in the `tickets` table in the Hesk database available in cPanel through `phpMyAdmin`. There is a bit of RegEx magic to deal with the weird way the `attachments` field is generated in the database. Otherwise it's `HTML` and `CSS`. 

Changes will not take effect if theme is not set to `DGSC` in the admin panel. To do this, go to `Settings >> General >> General settings >> Site theme`. If everything is set up correctly, you should see `DGSC` in the dropdown menu. 

## Welcome
The folder `/welcome/` includes the files `footer.txt`, `head.txt`, and `header.txt`. These files are used by Hesk to append additional content to the generated public-facing user panel. Most importantly, `header.txt` puts the DGSC logo at the top of the page. 

For some reason, these files live in the Hesk root folder `/home/opencuny/public_html/dgsc/forms/`, not in the theme directory, so you'll have to offload them there for changes. 

Additional instructions: https://www.hesk.com/knowledgebase/index.php?article=33 
