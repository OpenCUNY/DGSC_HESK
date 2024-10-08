<?php
/*
*
* Language file for Help Desk Software HESK (https://www.hesk.com)
* Language: English
* Version: 3.4.0
*
* ==> CONTRIBUTORS
*
* Klemen Stirn (https://www.hesk.com)
* Mike Koch (https://mikeko.ch)
*
* ==> HOW TO TRANSLATE THIS FILE
*
* https://www.hesk.com/knowledgebase/?article=34
*
* ==> HOW TO CUSTOMIZE TEXT
*
* Do NOT customize text inside here, it will be overwritten by updates!
*
* Follow this guide instead:
* https://www.hesk.com/knowledgebase/?article=88
*
* ==> IMPORTANT: FILE ENCODING
*
* This file *must* be saved in UTF-8 encoding without byte order mark (BOM)
* Test chars: àáâãäåæ
*
* https://www.hesk.com/knowledgebase/?article=87
*
*/

// Native name of language, for example: Deutsch
$hesklang['LANGUAGE']='DGSC';

// English name of language, for example: German
$hesklang['LANGUAGE_EN']='DGSC';

// Language encoding. It MUST be set to UTF-8 for all languages!
$hesklang['ENCODING']='UTF-8';

// MySQL utf8 collation. Do not change if not sure what to use.
$hesklang['_COLLATE']='utf8_unicode_ci';

// This is the email break line that will be used in email piping
$hesklang['EMAIL_HR']='------ Reply above this line ------';

// EMAIL SUBJECTS
$hesklang['new_ticket_staff']       = '[#%%TRACK_ID%%] New form: %%SUBJECT%%';
$hesklang['ticket_received']        = '[#%%TRACK_ID%%] Form received: %%SUBJECT%%';
$hesklang['ticket_assigned_to_you'] = '[#%%TRACK_ID%%] Form assigned: %%SUBJECT%%';
$hesklang['new_reply_by_customer']  = '[#%%TRACK_ID%%] New reply to: %%SUBJECT%%';
$hesklang['new_reply_by_staff']     = '[#%%TRACK_ID%%] New reply to: %%SUBJECT%%';
$hesklang['category_moved']         = '[#%%TRACK_ID%%] Form moved: %%SUBJECT%%';
$hesklang['new_note']               = '[#%%TRACK_ID%%] Note added to: %%SUBJECT%%';
$hesklang['new_pm']                 = 'New private message: %%SUBJECT%%';
$hesklang['forgot_ticket_id']       = 'List of your forms';
$hesklang['ticket_closed']			= '[#%%TRACK_ID%%] Form closed/resolved'; // New in 2.6.0
$hesklang['overdue_ticket']         = '[#%%TRACK_ID%%] Form overdue'; // New in 3.2.0
$hesklang['ticket_escalated']       = '[#%%TRACK_ID%%] ESCALATED: %%SUBJECT%%'; // New in 3.2.0
$hesklang['new_ticket_by_staff']    = '[#%%TRACK_ID%%] Form received: %%SUBJECT%%'; // New in 3.3.0
$hesklang['mfa_verification']       = '%%VERIFICATION_CODE%% is your verification code'; // New in 3.3.0
$hesklang['follow_up_email']        = 'Be honest - how did we do?'; // New in 3.3.0

// ERROR MESSAGES
$hesklang['cant_connect_db']='Can\'t connect to database!';
$hesklang['invalid_action']='Invalid action';
$hesklang['select_username']='Please select your username';
$hesklang['enter_pass']='Please enter your password';
$hesklang['cant_sql']='Can\'t execute SQL';
$hesklang['contact_webmsater']='Please notify webmaster at';
$hesklang['mysql_said']='MySQL said';
$hesklang['wrong_pass']='Wrong password.';
$hesklang['session_expired']='Your session has expired, please login using the form below.';
$hesklang['attempt']='Invalid attempt!';
$hesklang['not_authorized_tickets']='You are not authorized to view forms inside this category!';
$hesklang['must_be_admin']='You are not authorized to view this page! To view this page you must be logged in as an administrator.';
$hesklang['no_session']='Can\'t start a new session!';
$hesklang['error']='Error';
$hesklang['int_error']='Internal script error';
$hesklang['no_trackID']='No tracking ID';
$hesklang['status_not_valid']='Status not valid';
$hesklang['trackID_not_found']='Tracking ID not found';
$hesklang['select_priority']='Please select priority';
$hesklang['ticket_not_found']='Form not found! Please make sure you have entered the correct tracking ID!';
$hesklang['no_selected']='No forms selected, nothing to change';
$hesklang['id_not_valid']='This is not a valid ID';
$hesklang['enter_id']='Please enter tracking ID';
$hesklang['enter_name']='Please enter name';
$hesklang['enter_date']='Please enter the date you want to search in';
$hesklang['date_not_valid']='This is not a valid date. Please enter date in <b>YYYY-MM-DD</b> format.';
$hesklang['enter_subject']='Please enter form subject';
$hesklang['invalid_search']='Invalid search action';
$hesklang['choose_cat_ren']='Please choose a category to be renamed';
$hesklang['cat_ren_name']='Please write new category name';
$hesklang['cat_not_found']='Category not found';
$hesklang['enter_cat_name']='Please enter category name';
$hesklang['no_cat_id']='No category ID';
$hesklang['cant_del_default_cat']='You cannot delete the default category, you can only rename it';
$hesklang['no_valid_id']='No valid user ID';
$hesklang['user_not_found']='User not found';
$hesklang['enter_real_name']='Please enter user real name';
$hesklang['enter_valid_email']='Please enter a valid email address';
$hesklang['enter_username']='Please enter username (login)';
$hesklang['asign_one_cat']='Please assign user to at least one category!';
$hesklang['confirm_user_pass']='Please confirm password';
$hesklang['passwords_not_same']='The two passwords entered are not the same!';
$hesklang['cant_del_admin']='You cannot delete the default administrator!';
$hesklang['cant_del_own']='You cannot delete the profile you are logged in as!';
$hesklang['enter_your_name']='Please enter your name';
$hesklang['enter_message']='Please enter your message';
$hesklang['sel_app_cat']='Please select the appropriate category';
$hesklang['sel_app_priority']='Please select the appropriate priority';
$hesklang['enter_ticket_subject']='Please enter your form subject';
$hesklang['user_not_found_nothing_edit']='User not found or nothing to change';

// ADMIN PANEL
$hesklang['administrator']='Administrator';
$hesklang['login']='Login';
$hesklang['user']='User';
$hesklang['username']='Username';
$hesklang['pass']='Password';
$hesklang['confirm_pass']='Confirm password';
$hesklang['logged_out']='Logged out';
$hesklang['logout']='Logout';
$hesklang['logout_success']='You have been successfully logged out!';
$hesklang['click_login']='Click here to login';
$hesklang['back']='Go back';
$hesklang['displaying_pages']='Displaying <b>%d</b> forms. Pages:';
$hesklang['trackID']='Tracking ID';
$hesklang['timestamp']='Timestamp';
$hesklang['name']='Name';
$hesklang['subject']='Subject';
$hesklang['status']='Status';
$hesklang['priority']='Priority';
$hesklang['open_action']='Open form'; // Open ACTION
$hesklang['close']='Closed'; // Closed ticket STATUS
$hesklang['any_status']='Any status';
$hesklang['high']='High';
$hesklang['medium']='Medium';
$hesklang['low']='Low';
$hesklang['del_selected']='Delete selected forms';
$hesklang['manage_cat']='Manage categories';
$hesklang['profile']='Your profile';
$hesklang['show_tickets']='Show forms';
$hesklang['sort_by']='Sort by';
$hesklang['date_posted']='Date posted';
$hesklang['category']='Category';
$hesklang['any_cat']='Any category';
$hesklang['order']='Order';
$hesklang['ascending']='ascending';
$hesklang['descending']='descending';
$hesklang['display']='Display';
$hesklang['tickets_page']='forms per page';
$hesklang['find_ticket']='Find form';
$hesklang['yyyy_mm_dd']='YYYY-MM-DD';
$hesklang['results_page']='results per page';
$hesklang['opened']='opened'; // The ticket has been OPENED
$hesklang['ticket']='Form';
$hesklang['tickets']='Forms';
$hesklang['ticket_been']='This form has been';
$hesklang['view_ticket']='View form';
$hesklang['open_tickets']='Open forms';
$hesklang['remove_statement']='Remove &quot;Powered by&quot; statement';
$hesklang['click_info']='Click here for more info';
$hesklang['reply_added']='Reply added';
$hesklang['ticket_marked']='This form has been marked';
$hesklang['ticket_status']='Form status';
$hesklang['replies']='Replies';
$hesklang['date']='Date';
$hesklang['email']='Email';
$hesklang['ip']='IP';
$hesklang['message']='Message';
$hesklang['add_reply']='Add reply';
$hesklang['change_priority']='Change priority to';
$hesklang['attach_sign']='Attach signature';
$hesklang['profile_settings']='Profile settings';
$hesklang['submit_reply']='Submit reply';
$hesklang['support_panel']='Support panel';
$hesklang['ticket_trackID']='Form tracking ID';
$hesklang['c2c']='Click to continue';
$hesklang['tickets_deleted']='Forms deleted';
$hesklang['confirm_del_cat']='Are you sure you want to remove this category?';
$hesklang['remove']='Remove';
$hesklang['max_chars']='max 40 chars';
$hesklang['ren_cat']='Rename category';
$hesklang['to']='to';
$hesklang['cat_added']='Category added';
$hesklang['cat_name_added']='Category %s has been successfully added';
$hesklang['cat_renamed']='Category renamed';
$hesklang['cat_renamed_to']='Selected category has been successfully renamed to';
$hesklang['cat_removed']='Category removed';
$hesklang['cat_removed_db']='Selected category has been successfully removed from the database';
$hesklang['sure_remove_user']='Are you sure you want to remove this user?';
$hesklang['manage_users']='Manage users';
$hesklang['users_intro']='Here you are able to manage users who can login to the admin panel and
handle forms. Administrators can view/edit forms in any category and have access
to all functions of the admin panel (manage users, manage categories, ...) while
other users may only view and handle forms within their categories.';
$hesklang['yes']='YES';
$hesklang['no']='NO';
$hesklang['edit']='Edit';
$hesklang['add_user']='Add new user';
$hesklang['req_marked_with']='Required fields are marked with';
$hesklang['real_name']='Real name';
$hesklang['sign_extra']='HTML code is not allowed. Links will be clickable.';
$hesklang['create_user']='Create user';
$hesklang['editing_user']='Editing user';
$hesklang['user_added']='User added';
$hesklang['user_added_success']='New user %s with password %s has been successfully added';
$hesklang['user_removed']='User removed';
$hesklang['sel_user_removed']='Selected user has been successfully removed from the database';
$hesklang['profile_for']='Profile for';
$hesklang['new_pass']='New password';
$hesklang['update_profile']='Update profile';
$hesklang['notify_new_posts']='Notify me of new forms and posts within my categories';
$hesklang['profile_updated']='Profile updated';
$hesklang['profile_updated_success']='This profile has been successfully updated';
$hesklang['view_profile']='View profile';
$hesklang['new_ticket_submitted']='New form submitted';
$hesklang['user_profile_updated_success']='This user profile has been updated successfully';
$hesklang['printer_friendly']='Printer friendly version';
$hesklang['end_ticket']='End of form';

// CUSTOMER INTERFACE
$hesklang['your_ticket_been']='Your form has been';
$hesklang['submit_ticket']='Submit a form';
$hesklang['before_submit']='Before submitting please make sure of the following';
$hesklang['all_info_in']='All necessary information has been filled out';
$hesklang['all_error_free']='All information is correct and error-free';
$hesklang['we_have']='We have';
$hesklang['recorded_ip']='recorded as your IP Address';
$hesklang['recorded_time']='recorded the time of your submission';
$hesklang['save_changes']='Save changes';
$hesklang['reply_submitted']='Reply submitted';
$hesklang['reply_submitted_success']='Your reply to this form has been successfully submitted';
$hesklang['view_your_ticket']='View your form';
$hesklang['ticket_submitted']='Form submitted';
$hesklang['ticket_submitted_success']='Your form has been successfully submitted! Form ID';
$hesklang['your_ticket']='Your form';


// ADDED IN HESK VERSION 0.94
$hesklang['check_updates']='Make sure you always have installed the latest version of Hesk!';
$hesklang['check4updates']='Check for updates';
$hesklang['open']='New';
$hesklang['wait_reply']='Waiting reply';
$hesklang['replied']='Replied';
$hesklang['closed']='Resolved'; // Ticket has been RESOLVED
$hesklang['last_replier']='Last replier';
$hesklang['staff']='Staff';
$hesklang['customer']='Customer';
$hesklang['close_selected']='Mark selected forms Resolved';
$hesklang['execute']='Execute';
$hesklang['saved_replies']='Canned responses';
$hesklang['manage_saved']='Canned responses';
$hesklang['manage_intro']='Here you can add and manage canned responses. These are commonly used replies which are more or less the same for every customer. You should use canned responses to avoid typing the same reply to different customers numerous times.';
$hesklang['no_saved']='No canned responses';
$hesklang['delete_saved']='Are you sure you want to delete this canned response?';
$hesklang['new_saved']='Add or Edit a canned response';
$hesklang['canned_edit']='Edit selected canned response';
$hesklang['saved_title']='Title';
$hesklang['save_reply']='Save response';
$hesklang['saved']='Response saved';
$hesklang['your_saved']='Your canned response has been saved for future use';
$hesklang['ent_saved_title']='Please enter reply title';
$hesklang['ent_saved_msg']='Please enter reply message';
$hesklang['saved_removed']='Canned response removed';
$hesklang['saved_rem_full']='Selected canned response has been removed from the database';
$hesklang['clip_alt']='This post has attachments';
$hesklang['attachments']='Attachments';
$hesklang['fill_all']='Missing required field';
$hesklang['file_too_large']='Your file %s is too large';
$hesklang['created_on']='Created on';
$hesklang['tickets_closed']='Forms closed';
$hesklang['num_tickets_closed']='<b>%d</b> forms have been closed';
$hesklang['select_saved']='Select a canned response';
$hesklang['select_empty']='Select / Empty';
$hesklang['insert_special']='Insert special tag (will be replaced with customer info)';
$hesklang['move_to_catgory']='Move form to';
$hesklang['move']='Move';
$hesklang['moved']='Form moved';
$hesklang['moved_to']='This form has been moved to the new category';
$hesklang['url']='URL';
$hesklang['all_not_closed']='All but closed';
$hesklang['chg_all']='Change all';
$hesklang['settings']='Settings';
$hesklang['settings_intro']='Use this tool to configure your help desk. For more information about all settings and options click the help sign or refer to the readme.html file.';
$hesklang['all_req']='All fields (except disabled ones) are required!';
$hesklang['wbst_title']='Website title';
$hesklang['wbst_url']='Website URL';
$hesklang['email_wm']='Webmaster email';
$hesklang['max_listings']='Listings per page';
$hesklang['print_size']='Print font size';
$hesklang['debug_mode']='Debug mode';
$hesklang['on']='ON';
$hesklang['off']='OFF';
$hesklang['use_secimg']='Use anti-SPAM image';
$hesklang['secimg_no']='Not available';
$hesklang['attach_use']='Use attachments';
$hesklang['attach_num']='Number per post';
$hesklang['attach_type']='Allowed file types';
$hesklang['place_after']='After Message';
$hesklang['place_before']='Before Message';
$hesklang['custom_f']='Custom field';
$hesklang['custom_u']='Use this field';
$hesklang['custom_n']='Field name';
$hesklang['custom_l']='Maximum length (chars)';
$hesklang['db_host']='Database host';
$hesklang['db_name']='Database name';
$hesklang['db_user']='Database username';
$hesklang['db_pass']='Database password';
$hesklang['err_sname']='Please enter your website title';
$hesklang['err_surl']='Please enter your website URL. Make sure it is a valid URL (start with http:// or https://)';
$hesklang['err_wmmail']='Please enter a valid webmaster email';
$hesklang['err_nomail']='Please enter a valid noreply email';
$hesklang['err_htitle']='Please enter the title of your support desk';
$hesklang['err_hurl']='Please enter your Hesk folder url. Make sure it is a valid URL (start with http:// or https://)';
$hesklang['err_lang']='Please select Hesk language';
$hesklang['err_nolang']='The language file specified doesn\'t exist in the language folder! Make sure the file is uploaded before changing the language setting.';
$hesklang['err_max']='Please enter maximum listings displayed per page';
$hesklang['err_psize']='Please enter the print font size';
$hesklang['err_dbhost']='Please enter your MySQL database host';
$hesklang['err_dbname']='Please enter your MySQL database name';
$hesklang['err_dbuser']='Please enter your MySQL database username';
$hesklang['err_dbpass']='Please enter your MySQL database password';
$hesklang['err_dbsele']='Could not select MySQL database, please double-check database NAME';
$hesklang['err_openset']='Can\'t open file <b>hesk_settings.inc.php</b> for writing. Please CHMOD this file to 666 (rw-rw-rw-)';
$hesklang['set_saved']='Settings saved';
$hesklang['set_were_saved']='Your settings have been successfully saved';
$hesklang['sec_img']='Security image';
$hesklang['sec_miss']='Please enter the security number';
$hesklang['sec_wrng']='Wrong security number';
$hesklang['submit_problems']='Please go back and correct the following problems';
$hesklang['cat_order']='Category order';
$hesklang['reply_order']='Canned response order';
$hesklang['move_up']='Move up';
$hesklang['move_dn']='Move down';
$hesklang['cat_move_id']='Missing category ID';
$hesklang['reply_move_id']='Missing canned response ID';
$hesklang['forgot_tid']='Forgot tracking ID?';
$hesklang['tid_send']='Send me my tracking ID';
$hesklang['tid_not_found']='No forms with your email address were found';
$hesklang['tid_sent']='Tracking ID sent';
$hesklang['tid_sent2']='An email with details about your forms has been sent to your address';
$hesklang['check_spambox']='Be sure to also check for the email inside your SPAM/Junk mailbox!';
$hesklang['reply_not_found']='Canned response not found';
$hesklang['exists']='Exists';
$hesklang['no_exists']='Doesn\'t exist';
$hesklang['writable']='Writable';
$hesklang['not_writable']='Not writable';
$hesklang['disabled']='disabled';
$hesklang['e_settings']='You will not be able to save your settings unless this file is writable by the script. Please refer to the readme file for further instructions!';
$hesklang['e_attdir']='You will not be able to use file attachments unless the attachments folder exists and is writable by the script.';
$hesklang['e_save_settings']='Unable to save your settings because <b>hesk_settings.inc.php</b> file is not writable by the script.';
$hesklang['e_attach']='Disabled because your <b>attachments</b> directory is not writable by the script.';
$hesklang['go']='Go';


// ADDED OR CHANGED IN VERSION 2.0
$hesklang['v']='HESK version';
$hesklang['check_status']='Checking status';
$hesklang['sub_support']='Submit a form';
$hesklang['open_ticket']='Submit a new form to the DGSC';
$hesklang['vet']='View forms you submitted in the past';
$hesklang['enter_user']='Please enter your username';
$hesklang['remember_user']='Remember my username';
$hesklang['wrong_user']='Wrong username';
$hesklang['no_permission']='You don\'t have permission to perform this task, please login with an account that has.';
$hesklang['tickets_on_pages']='Number of forms: %d | Number of pages: %d'; // First %d is replaced with number of tickets, second %d with number of pages
$hesklang['jump_page']=' | Jump to page:';
$hesklang['no_tickets_open']='No unresolved forms found';
$hesklang['no_tickets_crit']='No forms found matching your criteria';
$hesklang['confirm_execute']='Are you sure you want to continue?';
$hesklang['legend']='Legend';
$hesklang['main_page']='Home';
$hesklang['menu_users']='Users';
$hesklang['menu_cat']='Categories';
$hesklang['menu_profile']='Profile';
$hesklang['menu_kb']='Knowledgebase'; // Admin MENU item
$hesklang['kb_text']='FAQ'; // Item visible to customers
$hesklang['viewkb']='View entire FAQ';
$hesklang['kb']='Manage Knowledgebase';
$hesklang['kb_intro']='Knowledgebase is a collection of answers to frequently asked questions (FAQ) and articles which provide self-help resources to your customers.
A comprehensive and well-written knowledgebase can drastically reduce the number of support tickets you receive and save a lot of your time. You can arrange articles into categories
and sub categories.'; // Description in ADMIN panel
$hesklang['kb_is']='Knowledgebase is a categorized collection of answers to frequently asked questions (FAQ) and articles. You can read articles in this category or select a subcategory that you are interested in.'; // Description for CUSTOMERS
$hesklang['new_kb_art']='New knowledgebase article';
$hesklang['kb_cat']='Category';
$hesklang['kb_subject']='Subject';
$hesklang['kb_content']='Contents';
$hesklang['kb_type']='Type';
$hesklang['kb_published']='Published';
$hesklang['kb_published2']='The article is viewable to everyone in the knowledgebase.';
$hesklang['kb_private']='Private';
$hesklang['kb_private2']='Private articles can only be read by staff.';
$hesklang['kb_draft']='Draft';
$hesklang['kb_draft2']='The article is saved but not yet published. It can only be read by staff<br /> who has permission to manage knowledgebase articles.';
$hesklang['kb_links']='<i><span class="notice"><b>Warning!</b></span><br />Enter valid code without &lt;head&gt; and &lt;body&gt; tags, just content!</i>';
$hesklang['kb_ehtml']='This is HTML code (I will enter valid (X)HTML code)';
$hesklang['kb_dhtml']='This is plain text (links will be clickable)';
$hesklang['kb_save']='Save article';
$hesklang['kb_e_subj']='Enter article subject!';
$hesklang['kb_e_cont']='Write article contents!';
$hesklang['kb_art_added']='Article added';
$hesklang['your_kb_added']='A new knowledgebase article has been successfully added';
$hesklang['kb_art_deleted']='Article deleted';
$hesklang['your_kb_deleted']='Selected knowledgebase article has been successfully deleted';
$hesklang['kb_art_mod']='Article modified';
$hesklang['your_kb_mod']='Your changes to the selected article have been saved successfully';
$hesklang['kb_cat_new']='New knowledgebase category';
$hesklang['kb_cat_parent']='Parent category';
$hesklang['kb_cat_sub']='Subcategories';
$hesklang['kb_cat_title']='Category title';
$hesklang['kb_cat_published']='The category is viewable to everyone in the knowledgebase.';
$hesklang['kb_cat_private']='The category can only be read by staff.';
$hesklang['kb_cat_add']='Add category';
$hesklang['kb_cat_e_title']='Enter category title!';
$hesklang['kb_cat_added']='Category added';
$hesklang['kb_cat_added2']='A new category has been successfully added to the knowledgebase';
$hesklang['kb_cat_man']='Manage knowledgebase category';
$hesklang['kb_cat_edit']='Edit category details';
$hesklang['kb_cat_inv']='Invalid category';
$hesklang['kb_cat_art']='Articles in this category';
$hesklang['kb_p_art']='+ Article';
$hesklang['kb_p_art2']='add a new article to the selected category.';
$hesklang['kb_add_art']='Add Article';
$hesklang['kb_p_cat']='+ Category';
$hesklang['kb_p_cat2']='create a new sub-category inside the selected category.';
$hesklang['kb_add_cat']='Add Category';
$hesklang['kb_p_man']='Manage';
$hesklang['kb_p_man2']='manage selected category (edit, delete, manage articles).';
$hesklang['kb_main']='The main knowledgebase category cannot be deleted or moved.';
$hesklang['kb_no_art']='There are no articles in this category.';
$hesklang['author']='Author';
$hesklang['views']='Views';
$hesklang['delete']='Delete';
$hesklang['rating']='Rating';
$hesklang['votes']='Votes';
$hesklang['kb_rated']='Article rated %s/5.0';
$hesklang['kb_not_rated']='Article not rated yet';
$hesklang['del_art']='Are you sure you want to delete selected article?';
$hesklang['kb_art_id']='Missing or invalid article ID!';
$hesklang['kb_art_edit']='Edit article';
$hesklang['revhist']='Revision history';
$hesklang['kb_order']='Order';
$hesklang['kb_delcat']='Are you sure you want to delete this category?';
$hesklang['kb_cat_mod']='Category modified';
$hesklang['your_cat_mod']='Your changes to the selected category have been saved successfully';
$hesklang['kb_cat_del']='Knowledgebase category deleted';
$hesklang['kb_cat_dlt']='The selected knowledgebase category has been deleted.';
$hesklang['allowed_cat']='Categories';
$hesklang['allow_feat']='Features';
$hesklang['can_view_tickets']='View forms';
$hesklang['can_reply_tickets']='Reply to forms';
$hesklang['can_assign_tickets']='Assign forms';
$hesklang['can_del_tickets']='Delete forms';
$hesklang['can_edit_tickets']='Edit form replies';
$hesklang['can_man_kb']='Manage knowledgebase';
$hesklang['can_man_users']='Manage users';
$hesklang['can_man_cat']='Manage categories';
$hesklang['can_man_canned']='Manage canned responses';
$hesklang['can_man_settings']='Manage help desk settings';
$hesklang['can_del_notes']='Delete any form notes';
$hesklang['dan']='users can delete their own form notes, select this only if you wish to allow this user to also be able to delete notes from other users';
$hesklang['in_all_cat']='in allowed categories only';
$hesklang['admin_can']='(access to all features and categories)';
$hesklang['staff_can']='(you can limit features and categories)';
$hesklang['asign_one_feat']='Please assign at least one feature to this user!';
$hesklang['na_view_tickets']='You are not authorized to view forms';
$hesklang['support_notice']='Sorry, this section can only be hidden when you purchase a HESK license!';
$hesklang['rart']='Was this article helpful?';
$hesklang['r']='Was this reply helpful?';
$hesklang['tyr']='Thank you for rating';
$hesklang['cw']='Close Window';
$hesklang['cw2']='Close window and submit form';
$hesklang['rh']='Rated as <i>helpful</i>';
$hesklang['rnh']='Rated as <i>not helpful</i>';
$hesklang['ar']='Already rated';
$hesklang['rated']='User rated %s/5.0 (%s votes)';
$hesklang['not_rated']='User not rated yet';
$hesklang['rdis']='Rating has been disabled';
$hesklang['kbdis']='Knowledgebase is disabled';
$hesklang['kbpart']='Sorry, you don\'t have permission to access this article';
$hesklang['m']='More topics';
$hesklang['noa']='No articles yet';
$hesklang['noac']='No articles yet in this category';
$hesklang['dta']='Date added';
$hesklang['aid']='Article ID';
$hesklang['as']='Solution';
$hesklang['search']='Search';
$hesklang['nosr']='No matching articles found. Try browsing the knowledgebase or submit a new form.';
$hesklang['rv']='Reset views';
$hesklang['rr']='Reset votes (ratings)';
$hesklang['opt']='Options';
$hesklang['delcat']='Delete category';
$hesklang['move1']='Move articles to parent category';
$hesklang['move2']='Delete articles in this category';
$hesklang['sc']='Suggested knowledgebase articles';
$hesklang['not']='Forms'; // Number of all tickets in category
$hesklang['graph']='Graph';
$hesklang['lu']='List usernames';
$hesklang['aclose']='Autoclose forms';
$hesklang['aclose2']='days after last staff reply';
$hesklang['s_ucrt']='Reopen forms';
$hesklang['urate']='Reply ratings';
$hesklang['hesk_url']='Help desk URL';
$hesklang['hesk_title']='Help desk title';
$hesklang['cid']='Case Tracking ID';
$hesklang['tfor']='Time format';
$hesklang['prefix']='Table prefix';
$hesklang['s_kbs']='Enable KB search';
$hesklang['s_kbr']='Enable KB rating';
$hesklang['s_maxsr']='Max search results';
$hesklang['s_suggest']='Suggest KB articles';
$hesklang['s_spop']='Show popular articles';
$hesklang['s_slat']='Show latest articles';
$hesklang['s_onin']='on <a href="../" target="_blank">help desk index</a> page';
$hesklang['s_onkb']='on <a href="../knowledgebase.php" target="_blank">Knowledgebase index</a> page';
$hesklang['s_scol']='Categories in row';
$hesklang['s_ptxt']='Article preview length';
$hesklang['s_psubart']='Subcategory articles';
$hesklang['enable']='Enable';
$hesklang['s_type']='Type';
$hesklang['custom_r']='Required';
$hesklang['custom_place']='Location';
$hesklang['custom_use']='Custom fields';
$hesklang['stf']='Text field';
$hesklang['stb']='Large text box';
$hesklang['srb']='Radio button';
$hesklang['ssb']='Select box';
$hesklang['db']='Database';
$hesklang['hd']='Help desk settings';
$hesklang['gs']='General settings';
$hesklang['cwin']='Close window';
$hesklang['defw']='Default value';
$hesklang['ok']='OK';
$hesklang['ns']='These are available options for this custom field. To save changes click <b>OK</b> and <b>Save changes</b> button on the admin settings page!';
$hesklang['rows']='Rows (height)';
$hesklang['cols']='Columns (width)';
$hesklang['opt2']='Options for this radio button, enter one option per line (each line will create a new radio button value to choose from). You need to enter at least two options!';
$hesklang['opt3']='Options for this select box, enter one option per line (each line will be a choice your customers can choose from). You need to enter at least two options!';
$hesklang['atl2']='Enter at least two options (one per line)!';
$hesklang['notes']='Notes';
$hesklang['noteby']='Note by';
$hesklang['delnote']='Delete note';
$hesklang['noteerr']='Note already deleted or wrong parameters';
$hesklang['s']='Submit';
$hesklang['nhid']='Notes are hidden from customers!';
$hesklang['delt']='Delete this post';
$hesklang['edtt']='Edit post';
$hesklang['edt1']='Post modified';
$hesklang['edt2']='Changes to the selected post have been saved';
$hesklang['dele']='Delete this form';
$hesklang['repd']='Post deleted';
$hesklang['repl']='Selected post has been deleted';
$hesklang['tickets_found']='Search results';
$hesklang['al']='Admin link';
$hesklang['ap']='Go to Administration Panel';
$hesklang['dap']='Display a link to admin panel from <a href="../" target="_blank">help desk index</a>';
$hesklang['q_miss']='Please answer the anti-SPAM question';
$hesklang['use_q']='Use anti-SPAM question';
$hesklang['err_qask']='Enter an anti-SPAM question';
$hesklang['err_qans']='Enter answer to the anti-SPAM question';
$hesklang['genq']='Generate a random question';


// Added or modified in version 2.1
$hesklang['amo']='Add more';
$hesklang['delatt']='Delete selected attachment?';
$hesklang['kb_att_rem']='Selected attachment has been removed';
$hesklang['inv_att_id']='Invalid attachment ID!';
$hesklang['scb']='Checkbox';
$hesklang['autologin']='Log me on automatically each visit';
$hesklang['just_user']='Remember just my username';
$hesklang['nothx']='No, thanks';
$hesklang['pinfo']='Profile information';
$hesklang['sig']='Signature';
$hesklang['pref']='Preferences';
$hesklang['aftrep']='After replying to a form';
$hesklang['showtic']='Show the form I just replied to';
$hesklang['gomain']='Return to main administration page';
$hesklang['shownext']='Open next form that needs my reply';
$hesklang['rssn']='Showing next form that needs your attention';
$hesklang['mrep']='Replace message';
$hesklang['madd']='Add to the bottom';
$hesklang['priv']='Private categories and articles viewable to staff only are marked with *';
$hesklang['inve']='Invalid email file';
$hesklang['emfm']='Missing email file';
$hesklang['hesk_lang']='Default Language';
$hesklang['s_mlang']='Multiple languages';
$hesklang['s_mlange']='Enable only if you provide support in all installed languages!';
$hesklang['s_inl']='Test language folder';
$hesklang['ta']='Test again';
$hesklang['alo']='Allow automatic login';
$hesklang['chol']='Preferred Language';
$hesklang['mmdl']='Make this my preferred Language';
$hesklang['warn']='WARNING';
$hesklang['dmod']='Debug mode is enabled. Make sure you disable debug mode in settings once HESK is installed and working properly.';
$hesklang['kb_spar']='Category can\'t be it\'s own parent category!';
$hesklang['mysql_root']='Your MySQL password is empty, are you sure you want to login with root user? This is a significant security risk!';
$hesklang['chg']='Change';
$hesklang['chpri']='Priority changed';
$hesklang['chpri2']='Form\'s priority has been changed to %s';
$hesklang['selcan']='Select the canned response you would like to edit';
$hesklang['q_wrng']='Wrong anti-SPAM answer';
$hesklang['cndupl']='You already have a category with that name. Choose a unique name for each category.';
$hesklang['wsel']='Select the field you want to search by';


// Added or modified in version 2.2
$hesklang['eto']='Invalid request';
$hesklang['id']='ID';
$hesklang['geco']='Generate Direct Link';
$hesklang['genl2']='Use this link to preselect category in the &quot;Submit a form&quot; form.';
$hesklang['exa']='Examples';
$hesklang['small']='Small Box';
$hesklang['large']='Large Box';
$hesklang['cpri']='Customer priority';
$hesklang['owner']='Owner';
$hesklang['unas']='Unassigned';
$hesklang['assi']='Assign';
$hesklang['asst']='Assign to';
$hesklang['asst2']='Assign this form to';
$hesklang['asss']='Assign to self';
$hesklang['asss2']='Assign this form to myself';
$hesklang['can_assign_self']='Can assign forms to self';
$hesklang['can_assign_others']='Can assign forms to others';
$hesklang['can_view_ass_others']='Can view forms assigned to others';
$hesklang['unoa']='Selected user doesn\'t have access to this category';
$hesklang['tasi']='Owner Assigned';
$hesklang['tasy']='This form has been assigned to you';
$hesklang['taso']='This form has been assigned to the selected user';
$hesklang['tasy2']='Assigned to me';
$hesklang['taso2']='Assigned to other staff';
$hesklang['nose']='Select the new Owner';
$hesklang['onasc']='This owner doesn\'t have access to the selected category.';
$hesklang['tunasi']='Form Unassigned';
$hesklang['tunasi2']='Form is without an owner and ready to be assigned again';
$hesklang['note']='Note';
$hesklang['success']='Success';
$hesklang['nyt']='This form is assigned to';
$hesklang['noch']='No changes have been made';
$hesklang['orch']='Display order has been modified';
$hesklang['rfm']='Required information missing:';
$hesklang['repl0']='Insufficient permissions to perform this task';
$hesklang['repl1']='This post doesn\'t exist';
$hesklang['reports']='Reports';
$hesklang['reports_intro']='The reports section lets you run several reports and see form statistics in a chosen date range.';
$hesklang['refi']='Reset form data';
$hesklang['dich']='Discard Changes';
$hesklang['dire']='Display Report';
$hesklang['m1']='January';
$hesklang['m2']='February';
$hesklang['m3']='March';
$hesklang['m4']='April';
$hesklang['m5']='May';
$hesklang['m6']='June';
$hesklang['m7']='July';
$hesklang['m8']='August';
$hesklang['m9']='September';
$hesklang['m10']='October';
$hesklang['m11']='November';
$hesklang['m12']='December';
$hesklang['d1']='Monday';
$hesklang['d2']='Tuesday';
$hesklang['d3']='Wednesday';
$hesklang['d4']='Thursday';
$hesklang['d5']='Friday';
$hesklang['d6']='Saturday';
$hesklang['d0']='Sunday';
$hesklang['mo']='Mo';
$hesklang['tu']='Tu';
$hesklang['we']='We';
$hesklang['th']='Th';
$hesklang['fr']='Fr';
$hesklang['sa']='Sa';
$hesklang['su']='Su';
$hesklang['from']='From';
$hesklang['cinv']='Invalid date';
$hesklang['cinv2']='Accepted format is mm/dd/yyyy';
$hesklang['cinm']='Invalid month value';
$hesklang['cinm2']='Allowed range is';
$hesklang['cind']='Invalid day of month value';
$hesklang['cind2']='Allowed range for selected month is';
$hesklang['month']='Month';
$hesklang['ocal']='Open Calendar';
$hesklang['ca01']='Previous Year';
$hesklang['ca02']='Previous Month';
$hesklang['ca03']='Next Month';
$hesklang['ca04']='Next Year';
$hesklang['ca05']='Close Calendar';
$hesklang['cdr']='Choose date range:';
$hesklang['r1']='Today';
$hesklang['r2']='Yesterday';
$hesklang['r3']='This month';
$hesklang['r4']='Last month';
$hesklang['r5']='Last 30 days';
$hesklang['r6']='This week (Mon-Sun)';
$hesklang['r7']='Last week (Mon-Sun)';
$hesklang['r8']='This business week (Mon-Fri)';
$hesklang['r9']='Last business week (Mon-Fri)';
$hesklang['r10']='This year';
$hesklang['r11']='Last year';
$hesklang['r12']='All time';
$hesklang['datetofrom']='&quot;Date From&quot; cannot be higher than &quot;Date to&quot;. The dates have been switched.';
$hesklang['t1']='Forms per day';
$hesklang['t2']='Forms per month';
$hesklang['t3']='Forms per user';
$hesklang['t4']='Forms per category';
$hesklang['ticass']='Assigned forms';
$hesklang['ticall']='Replied to forms';
$hesklang['totals']='Totals';
$hesklang['all']='All';
$hesklang['atik']='New forms';
$hesklang['kbca']='You already have a knowledgebase category with this name.';
$hesklang['menu_msg']='Mail';
$hesklang['menu_can']='Canned';
$hesklang['m_re']='Re:'; // Mail reply subject prefix, like "Re: Original subject"
$hesklang['m_fwd']='Fwd:'; // Mail forward subject prefix, like "Fwd: Original subject"
$hesklang['m_h']='Private messages';
$hesklang['m_intro']='Use private messages to send quick messages to other staff members within the HESK.';
$hesklang['e_udel']='(User deleted)';
$hesklang['new_mail']='New private message';
$hesklang['m_send']='Send message';
$hesklang['m_rec']='Select message recipient';
$hesklang['m_inr']='Invalid message recipient';
$hesklang['m_esu']='Enter private message subject';
$hesklang['m_pms']='Your private message has been sent';
$hesklang['pg']='Show page';
$hesklang['npm']='No private messages in this folder.';
$hesklang['m_ena']='You don\'t have permission to read this message.';
$hesklang['mau']='Mark as unread';
$hesklang['mo1']='Mark selected messages as read';
$hesklang['mo2']='Mark selected messages as unread';
$hesklang['mo3']='Delete selected messages';
$hesklang['delm']='Delete this message';
$hesklang['e_tid']='Error generating a unique form ID, please try submitting the form again later.';
$hesklang['smmr']='Selected messages have been marked as read';
$hesklang['smmu']='Selected messages have been marked as unread';
$hesklang['smdl']='Selected messages have been deleted';
$hesklang['show']='Show';
$hesklang['s_my']='Assigned to me';
$hesklang['s_ot']='Assigned to others';
$hesklang['s_un']='Unassigned forms';
$hesklang['s_for']='Search for';
$hesklang['s_in']='Search in';
$hesklang['s_incl']='Search within';
$hesklang['find_ticket_by']='Find a form';
$hesklang['e_nose']='No assignment status selected, showing all forms.';
$hesklang['fsq']='Enter your search query';
$hesklang['topen']='Open'; // Not-resolved tickets
$hesklang['nms']='No messages selected, nothing to change';
$hesklang['tlo']='Lock form';
$hesklang['tul']='Unlock form';
$hesklang['loc']='Locked';
$hesklang['isloc']='Customers cannot reply to or re-open locked forms. When locked form is marked as resolved.';
$hesklang['tlock']='Form has been locked';
$hesklang['tunlock']='Form has been unlocked';
$hesklang['tislock']='This form has been locked, the customer will not be able to post a reply.';
$hesklang['tislock2']='This form has been locked, you cannot post a reply.';
$hesklang['nsfo']='No relevant articles found.';
$hesklang['elocked']='This form has been locked or deleted.';
$hesklang['nti2']='Insert a new form';
$hesklang['nti3']='Use this form to create a new form in a customer\'s name. Enter <i>customer</i> information in the form (customer name, customer email, ...) and NOT your name! Form will be created as if the customer submitted it.';
$hesklang['addop']='Options';
$hesklang['seno']='Send email notification to the customer';
$hesklang['otas']='Show the form after submission';
$hesklang['notn']='Notifications';
$hesklang['nomw']='The help desk will send an email notification when:';
$hesklang['nwts']='A new form is submitted with owner:';
$hesklang['ncrt']='Client responds to a form with owner:';
$hesklang['ntam']='A form is assigned to me';
$hesklang['npms']='A private message is sent to me';
$hesklang['support_remove']='A lot of time and effort went into developing HESK. Support HESK by purchasing a license that will remove the credits links <i>Powered by Help Desk Software HESK</i> from your helpdesk';
$hesklang['ycvtao']='You are not allowed to view forms assigned to others';
$hesklang['password_not_valid']='Password must be at least 5 chars long';
$hesklang['lkbs']='Loading knowledgebase suggestions...';
$hesklang['auto']='(automatically)';

// Added or modified in version 2.3
$hesklang['unknown']='Unknown';
$hesklang['pcer']='Please correct the following errors:';
$hesklang['seqid']='Form number';
$hesklang['close_action']='Mark as Resolved'; // Close ACTION
$hesklang['archived']='Tagged';
$hesklang['archived2']='Tagged Form';
$hesklang['add_archive']='Tag this form';
$hesklang['add_archive_quick']='Tag selected forms';
$hesklang['remove_archive']='Untag this form';
$hesklang['remove_archive_quick']='Untag selected forms';
$hesklang['added_archive']='Form Tagged';
$hesklang['removed_archive']='Form Untagged';
$hesklang['added2archive']='Form has been tagged';
$hesklang['removedfromarchive']='Form has been untagged';
$hesklang['num_tickets_tag']='<b>%d</b> forms have been tagged';
$hesklang['num_tickets_untag']='<b>%d</b> forms have been untagged';
$hesklang['can_add_archive']='Can tag forms';
$hesklang['disp_only_archived']='Only tagged forms';
$hesklang['search_only_archived']='Only tagged forms';
// START abbreviatons used in "last updated" column
$hesklang['abbr']['year']='y';
$hesklang['abbr']['month']='mo';
$hesklang['abbr']['week']='w';
$hesklang['abbr']['day']='d';
$hesklang['abbr']['hour']='h';
$hesklang['abbr']['minute']='m';
$hesklang['abbr']['second']='s';
// END abberviations
$hesklang['cnsm']='Cound not send the message to:';
$hesklang['yhbb']='You have been locked out the system for %s minutes because of too many login failures.';
$hesklang['pwdst']='Password Strength';
$hesklang['tid_mail']='No worries! Enter your <b>Email address</b> and we will send you your tracking ID right away:';
$hesklang['rem_email']='Remember my email address';
$hesklang['eytid']='Enter your form tracking ID.';
$hesklang['enmdb']='The email address you entered doesn\'t match the one in the database for this form ID.';
$hesklang['confemail']='Confirm Email';
$hesklang['confemail2']='Please confirm your Email address';
$hesklang['confemaile']='The two email addresses are not identical';
$hesklang['taso3']='Assigned to:';
$hesklang['sec_enter']='Type the number you see in the picture below.';
$hesklang['reload']='Reload image';
$hesklang['verify_q']='SPAM Prevention:'; // For anti-spam question
$hesklang['verify_i']='SPAM Prevention:'; // For anti-spam image (captcha)
$hesklang['vrfy']='Test passed';
$hesklang['last_update']='Updated';
$hesklang['cot']='Don\'t force Critical forms on top';
$hesklang['def']='Make this my default view';
$hesklang['gbou']='These forms are <b>Unassigned</b>:';
$hesklang['gbom']='Forms assigned to <b>me</b>:';
$hesklang['gboo']='Forms assigned to <b>%s</b>:';
$hesklang['select']=' - - Click to Select - - ';
$hesklang['chngstatus']='Change status to';
$hesklang['perat']='%s of all forms'; // will change to "23% of all tickets"
$hesklang['viewart']='View this article';
$hesklang['chdp']='Please change the default password on your <a href="profile.php">Profile</a> page!';
$hesklang['chdp2']='Change your password, you are using the default one!';
$hesklang['security']='Security';
$hesklang['kb_i_art']='New Article';
$hesklang['kb_i_art2']='Insert an Article';
$hesklang['kb_i_cat']='New Category';
$hesklang['kb_i_cat2']='Insert a Category';
$hesklang['gopr']='View Knowledgebase';
$hesklang['kbstruct']='Knowledgebase structure';
$hesklang['cancel']='Cancel';
$hesklang['sh']='Hide Message';
$hesklang['goodkb']='How to write good knowledgebase articles?';
$hesklang['catset']='Category Settings';
$hesklang['inpr']='Select the new Priority';
$hesklang['incat']='Select the new Category';
$hesklang['instat']='Select the new Status';
$hesklang['tsst']='Form status has been set to %s';
$hesklang['aass']='Auto-assign';
$hesklang['aaon']='Auto-assign of forms enabled (click to disable)';
$hesklang['aaoff']='Auto-assign of forms disabled (click to enable)';
$hesklang['uaaon']='Auto-assign has been enabled for selected user';
$hesklang['uaaoff']='Auto-assign has been disabled for selected user';
$hesklang['taasy']='This form has been auto-assigned to you';
$hesklang['can_view_unassigned']='Can view unassigned forms';
$hesklang['ycovtay']='You can only view forms assigned to you';
$hesklang['in_progress']='In Progress';
$hesklang['on_hold']='On Hold';
$hesklang['import_kb']='Import this form into a Knowledgebase article';
$hesklang['import']='You are importing a <i>private form</i> into a <i>public article</i>.<br /><br />Make sure you delete any private or sensitive information from the article subject and message!';
$hesklang['tab_1']='General';
$hesklang['tab_2']='Help Desk';
$hesklang['tab_3']='Knowledgebase';
$hesklang['tab_5']='Misc';
$hesklang['disable']='Disable';
$hesklang['dat']='Date &amp; Time';
$hesklang['lgs']='Language';
$hesklang['onc']='ON - Customers';
$hesklang['viewvtic']='View forms';
$hesklang['reqetv']='Require email to view a form';
$hesklang['banlim']='Login attempts limit';
$hesklang['banmin']='Ban time (minutes)';
$hesklang['subnot']='Submit notice';
$hesklang['subnot2']='Show notice to customers submitting forms';
$hesklang['eseqid']='Sequential IDs';
$hesklang['sconfe']='Confirm email';
$hesklang['saass']='Auto-assign forms';
$hesklang['swyse']='WYSIWYG Editor';
$hesklang['hrts']='Rate HESK';
$hesklang['hrts2']='Show Rate this script link in admin panel';
$hesklang['emlpipe']='Email Piping';
$hesklang['emlsend2']='Send emails using';
$hesklang['phpmail']='PHP mail()';
$hesklang['smtp']='SMTP Server';
$hesklang['smtph']='SMTP Host';
$hesklang['smtpp']='SMTP Port';
$hesklang['smtpu']='SMTP Username';
$hesklang['smtpw']='SMTP Password';
$hesklang['smtpt']='SMTP Timeout';
$hesklang['other']='Other';
$hesklang['features']='Features';
$hesklang['can_view_online']='Can view online staff members';
$hesklang['online']='Online';
$hesklang['offline']='Offline';
$hesklang['onlinep']='Users Online'; // For display
$hesklang['sonline']='Users Online'; // For settings page
$hesklang['sonline2']='Show online users. Limit (minutes):'; // For settings page
$hesklang['gb']='Group by';
$hesklang['dg']='Don\'t group';
$hesklang['err_dpi']='Database %s does not contain all HESK tables with prefix %s, no changes saved.';
$hesklang['err_dpi2']='Tables not found:';
$hesklang['sme']='SMTP error';
$hesklang['scl']='SMTP connection log';
$hesklang['dnl']='Download';
$hesklang['dela']='Delete this attachment';
$hesklang['pda']='Do you want to permanently delete this attachment?';
$hesklang['mopt']='More options';
$hesklang['lopt']='Less options';
$hesklang['meml']='Multiple emails';
$hesklang['meml2']='Allow customers to enter multiple contact emails';


// Added or modified in version 2.4
$hesklang['catd']='(category deleted)';
$hesklang['noopen']='No open forms found for this email address.';
$hesklang['maxopen']='You have reached maximum open forms (%d of %d). Please wait until your existing forms are resolved before opening new forms.';
$hesklang['ntnote']='Someone adds a note to a form assigned to me';
$hesklang['cat_public']='This category is PUBLIC (click to make private)';
$hesklang['cat_private']='This category is PRIVATE (click to make public)';
$hesklang['cat_aa']='Auto-assign forms in this category.';
$hesklang['cat_type']='Make this category private (only staff can select it).';
$hesklang['caaon']='Auto-assign has been enabled for selected category';
$hesklang['caaoff']='Auto-assign has been disabled for selected category';
$hesklang['cpub']='Category type changed to PUBLIC';
$hesklang['cpriv']='Category type changed to PRIVATE';
$hesklang['cpric']='Customers cannot select private categories, only staff can!';
$hesklang['user_aa']='Auto-assign forms to this user.';
$hesklang['attach_size']='Maximum file size';
$hesklang['B']='B';
$hesklang['kB']='kB';
$hesklang['MB']='MB';
$hesklang['GB']='GB';
$hesklang['bytes']='bytes';
$hesklang['kilobytes']='kilobytes';
$hesklang['megabytes']='megabytes';
$hesklang['gigabytes']='gigabytes';
$hesklang['smtpssl']='SSL Protocol';
$hesklang['smtptls']='TLS Protocol';
$hesklang['oo']='Open only';
$hesklang['ool']='List only open forms in &quot;Forgot tracking ID&quot; email';
$hesklang['mop']='Max open forms';
$hesklang['rord']='Reply order';
$hesklang['newbot']='Newest reply at bottom';
$hesklang['newtop']='Newest reply at top';
$hesklang['ford']='Reply form';
$hesklang['formbot']='Show form at bottom';
$hesklang['formtop']='Show form at top';
$hesklang['mysqlv']='MySQL version';
$hesklang['phpv']='PHP version';
$hesklang['csrt']='Current HESK time:';
$hesklang['listp']='List private articles';
$hesklang['listd']='List article drafts';
$hesklang['artp']='Private articles';
$hesklang['artd']='Article drafts';
$hesklang['kb_no_part']='No private articles in the knowledgebase.';
$hesklang['kb_no_dart']='No article drafts in the knowledgebase.';
$hesklang['attpri']='You don\'t have access to this attachment.';
$hesklang['can_merge_tickets']='Merge forms';
$hesklang['mer_selected']='Merge selected forms';
$hesklang['merged']='Selected forms have been merged into one.';
$hesklang['merge_err']='There was a problem merging forms:';
$hesklang['merr1']='select at least two forms.';
$hesklang['merr2']='target form not found.';
$hesklang['merr3']='form in a category you don\'t have access to.';
$hesklang['tme']='Form %s has been merged with this form (%s).';
$hesklang['tme1']='Form %s has been merged with form %s';
$hesklang['tme2']='To access form %s enter associated email address.';
$hesklang['eyou']='Use Profile page to edit your settings.';
$hesklang['npea']='You don\'t have permission to edit this user.';
$hesklang['duplicate_user']='User with this username already exists, choose a different username.';
$hesklang['kw']='Keywords';
$hesklang['kw1']='(optional - separate by space, comma or new line)';
$hesklang['type_not_allowed']='Files ending with <b>%s</b> are not accepted (%s)'; // Files ending with .exe are not accepted (test.exe)
$hesklang['unread']='Customer hasn\'t read this reply yet.';
$hesklang['sticky']='Make this article &quot;Sticky&quot;';
$hesklang['stickyon']='Change article to &quot;Sticky&quot;';
$hesklang['stickyoff']='Change article to &quot;Normal&quot;';
$hesklang['ason']='Article marked as &quot;Sticky&quot;';
$hesklang['asoff']='Article marked as &quot;Normal&quot;';
$hesklang['ts']='Time worked';
$hesklang['start']='Start / Stop';
$hesklang['reset']='Reset';
$hesklang['save']='Save';
$hesklang['hh']='Hours';
$hesklang['mm']='Minutes';
$hesklang['ss']='Seconds';
$hesklang['twu']='Time worked on form has been updated.';
$hesklang['autoss']='Automatically start timer when I open a form';
$hesklang['ful']='File upload limits';
$hesklang['ufl']='You may upload files ending with:';
$hesklang['nat']='Maximum number of attachments:';
$hesklang['mfs']='Maximum size per attachment:';
$hesklang['lps']='Your language preference has been saved';
$hesklang['sav']='Show article views';
$hesklang['sad']='Show article date';
$hesklang['epd']='[HESK] EMAIL PIPING IS DISABLED IN SETTINGS';
$hesklang['pfd']='[HESK] POP3 FETCHING IS DISABLED IN SETTINGS';
$hesklang['pem']='[Piped email]'; // Default subject of piped tickets without subject
$hesklang['pde']='[Customer]'; // Default customer name for piped tickets without name
$hesklang['tab_6']='Email';
$hesklang['pop3']='POP3 Fetching';
$hesklang['pop3h']='POP3 Host';
$hesklang['pop3p']='POP3 Port';
$hesklang['pop3tls']='TLS Protocol';
$hesklang['pop3u']='POP3 Username';
$hesklang['pop3w']='POP3 Password';
$hesklang['pop3e']='POP3 error';
$hesklang['pop3log']='POP3 connection log';
$hesklang['mysqltest']='Test MySQL connection';
$hesklang['smtptest']='Test SMTP connection';
$hesklang['pop3test']='Test POP3 connection';
$hesklang['contest']='Testing connection, this can take a while...';
$hesklang['conok']='Connection successful!';
$hesklang['conokn']='However, if your server requires username and password email will not be sent!';
$hesklang['saving']='Saving settings, please wait...';
$hesklang['sns']='Settings were saved, but some functions were disabled because of failed tests.';
$hesklang['loops']='Email Loops';
$hesklang['looph']='Max Hits';
$hesklang['loopt']='Timeframe';
$hesklang['didum']='Did you mean %s?'; // Did you mean someone@gmail.com?
$hesklang['yfix']='Yes, fix it';
$hesklang['nole']='No, leave it';
$hesklang['sconfe2']='Show a &quot;Confirm email&quot; field on the submit a form form';
$hesklang['oln']='Old name:';
$hesklang['nen']='New name:';
$hesklang['use_form_below']='<i>Use this form to submit a support request. Required fields are marked with</i>';
$hesklang['esf']='Could not send email notifications.';
$hesklang['qrr']='(quoted reply removed)';
$hesklang['remqr']='Strip quoted reply';
$hesklang['remqr2']='Delete quoted reply from customer emails';
$hesklang['suge']='Detect email typos';
$hesklang['epro']='Email providers';
$hesklang['email_noreply']='&raquo;From:&laquo; email';
$hesklang['email_name']='&raquo;From:&laquo; name';
$hesklang['vscl']='Server configuration limits';
$hesklang['fnuscphp']='File upload failed, try with a smaller or no file attachment.';
$hesklang['redv']='reset default view';
$hesklang['fatte1']='Your attachments setting &quot;Number per post&quot; is larger than what your server allows!';
$hesklang['fatte2']='Your maximum attachment file size is larger than what your server allows!';
$hesklang['fatte3']='Your server does not allow large enough posts, try reducing number of attachments or allowed file size!';
$hesklang['embed']='Embedded files';
$hesklang['embed2']='Save embedded files as attachments';
$hesklang['emrem']='(image removed)';
$hesklang['hdemo']='(HIDDEN IN DEMO)';
$hesklang['ddemo']='Sorry, this function has been disabled in DEMO mode!';
$hesklang['sdemo']='Saving changes has been disabled in DEMO mode';
$hesklang['hud']='HESK is up to date';
$hesklang['hnw']='Update available';
$hesklang['getup']='Update HESK';
$hesklang['updates']='Updates';
$hesklang['updates2']='Automatically check for HESK updates.';


// Added or modified in version 2.5.0
$hesklang['emp']='Your PHP does not have MySQL support enabled (mysqli extension required)';
$hesklang['attdel']='This file has been deleted from the server and is no longer available for download';
$hesklang['cannot_move_tmp']='Cannot move file to the attachments folder';
$hesklang['dsen']='Don\'t send email notification of this reply to the customer';
$hesklang['attrem']='* Some attached files have been removed *';
$hesklang['attnum']='Max number reached: %s'; // %s will show attachment name
$hesklang['attsiz']='File too large: %s'; // %s will show attachment name
$hesklang['atttyp']='Type not allowed: %s'; // %s will show attachment name
$hesklang['adf']='Admin folder';
$hesklang['atf']='Attachments folder';
$hesklang['err_adf']='The selected admin folder (%s) does not exist!'; // %s will show folder name
$hesklang['err_atf']='The selected attachments folder (%s) does not exist!'; // %s will show folder name
$hesklang['err_atr']='The selected attachments folder (%s) is not writable!'; // %s will show folder name
$hesklang['fatt']='Files attached to this message:';
$hesklang['wrepo']='Please write a reply after re-opening the form.';
$hesklang['uac']='Verify and update category article count';
$hesklang['acv']='Article count has been verified';
$hesklang['xyz']='number of public, private and draft articles in category.';
$hesklang['crt']='Report type';
$hesklang['can_run_reports']='Can run reports (own)';
$hesklang['can_run_reports_full']='Can run reports (all)';
$hesklang['can_export']='Can export forms';
$hesklang['roo']='<i>(only forms assigned to you are included in the report)</i>';
$hesklang['shu']='Short links';
$hesklang['export_btn']='Export forms'; // Button title
$hesklang['export_intro']='This tool allows you to export forms into an XML spreadsheet that can be opened in Excel.';
$hesklang['stte']='Select forms to export';
$hesklang['dtrg']='Date range';
$hesklang['sequentially']='Sequentially'; // Order tickets: Sequentially
$hesklang['ede']='Cannot create export directory, please manually create a folder called <b>export</b> inside your attachments folder and make sure it is writable by PHP (on Linux CHMOD it to 777 - rwxrwxrwx).';
$hesklang['eef']='Cannot create export file, no permission to write inside the export directory.';
$hesklang['inite']='Initializing export';
$hesklang['gXML']='Generating XML file';
$hesklang['nrow']='Number of rows exported: %d'; // %d will show number of rows exported
$hesklang['cZIP']='Compressing file into a Zip archive';
$hesklang['eZIP']='Error creating Zip archive';
$hesklang['fZIP']='Finished compressing the file';
$hesklang['pmem']='Peak memory usage: %.2f Mb'; // %.2f will be replaced with number of Mb used
$hesklang['ch2d']='&raquo; CLICK HERE TO DOWNLOAD THE EXPORT FILE &laquo;';
$hesklang['n2ex']='No forms found matching your criteria, nothing to export!';
$hesklang['sp']='SPAM Prevention'; // For settings page
$hesklang['sis']='Simple image';
$hesklang['pop3keep']='Keep a copy';
$hesklang['err_dbconn']='Could not connect to MySQL database using provided information!';
$hesklang['s_inle']='Testing the language folder for valid languages. Only languages that pass all tests are properly installed.';
$hesklang['ask']='Search help:';
$hesklang['beta']='(TEST VERSION)';
$hesklang['maxpost']='You probably tried to submit more data than this server accepts.<br /><br />Please try submitting the form again with smaller or no attachments.';

// --> Ticket history log
// Unless otherwise specified, first %s will be replaced with date and second with name/username
$hesklang['thist1']='<li class="smaller">%s | moved to category %s by %s</li>'; // %s = date, new category, user making change
$hesklang['thist2']='<li class="smaller">%s | assigned to %s by %s</li>'; // %s = date, assigned user, user making change
$hesklang['thist3']='<li class="smaller">%s | closed by %s</li>';
$hesklang['thist4']='<li class="smaller">%s | opened by %s</li>';
$hesklang['thist5']='<li class="smaller">%s | locked by %s</li>';
$hesklang['thist6']='<li class="smaller">%s | unlocked by %s</li>';
$hesklang['thist7']='<li class="smaller">%s | form created by %s</li>';
$hesklang['thist8']='<li class="smaller">%s | priority changed to %s by %s</li>'; // %s = date,new priority, user making change
$hesklang['thist9']='<li class="smaller">%s | status changed to %s by %s</li>'; // %s = date, new status, user making change
$hesklang['thist10']='<li class="smaller">%s | automatically assigned to %s</li>';
$hesklang['thist11']='<li class="smaller">%s | submitted by email piping</li>';
$hesklang['thist12']='<li class="smaller">%s | attachment %s deleted by %s</li>'; // %s = date, deleted attachment, user making change
$hesklang['thist13']='<li class="smaller">%s | merged with form %s by %s</li>'; // %s = date, merged ticket ID, user making change
$hesklang['thist14']='<li class="smaller">%s | time worked updated to %s by %s</li>'; // %s = date, new time worked, user making change
$hesklang['thist15']='<li class="smaller">%s | submitted by %s</li>';
$hesklang['thist16']='<li class="smaller">%s | submitted by POP3 fetching</li>';

// --> Knowledgebase articles log
// First %s will be replaced with date and second with user making changes
$hesklang['revision1']='<li class="smaller">%s | submitted by %s</li>';
$hesklang['revision2']='<li class="smaller">%s | modified by %s</li>';


// Added or modified in version 2.5.3
$hesklang['close_this_ticket']='Mark this form Resolved';


// Added or modified in version 2.6.0
$hesklang['ms01']='Jan';
$hesklang['ms02']='Feb';
$hesklang['ms03']='Mar';
$hesklang['ms04']='Apr';
$hesklang['ms05']='May';
$hesklang['ms06']='Jun';
$hesklang['ms07']='Jul';
$hesklang['ms08']='Aug';
$hesklang['ms09']='Sep';
$hesklang['ms10']='Oct';
$hesklang['ms11']='Nov';
$hesklang['ms12']='Dec';
$hesklang['sdf']='Submitted date format';
$hesklang['lcf']='Updated date format';
$hesklang['lcf0']='Short descriptive';
$hesklang['lcf1']='Date and time';
$hesklang['lcf2']='HESK style';
$hesklang['ticket_tpl']='Form templates';
$hesklang['can_man_ticket_tpl']='Manage form templates'; // Permission title
$hesklang['ticket_tpl_man']='Manage form templates'; // Page/link title
$hesklang['ticket_tpl_intro']='Create and edit form templates that you can use to quickly submit new forms from the admin interface.';
$hesklang['no_ticket_tpl']='No form templates';
$hesklang['ticket_tpl_title']='Title';
$hesklang['delete_tpl']='Are you sure you want to delete this template?';
$hesklang['new_ticket_tpl']='Add or Edit a form template';
$hesklang['ticket_tpl_edit']='Edit selected form template';
$hesklang['save_ticket_tpl']='Save form template';
$hesklang['ticket_tpl_saved']='Your form template has been saved for future use';
$hesklang['ticket_tpl_removed']='Selected form template has been removed from the database';
$hesklang['ticket_tpl_not_found']='Form template not found';
$hesklang['sel_ticket_tpl']='Select the form template you would like to edit';
$hesklang['ent_ticket_tpl_title']='Please enter template title';
$hesklang['ent_ticket_tpl_msg']='Please enter template message';
$hesklang['ticket_tpl_id']='Missing form template ID';
$hesklang['select_ticket_tpl']='Select a form template';
$hesklang['list_tickets_cat']='List all forms in this category';
$hesklang['def_msg']='[No message]';
$hesklang['emlreqmsg']='Require message';
$hesklang['emlreqmsg2']='Ignore piped/fetched emails with no message';
$hesklang['relart']='Related articles'; // Title of related articles box
$hesklang['s_relart']='Related articles'; // On settings page
$hesklang['tab_7']='Form list';
$hesklang['fitl']='Fields in form list';
$hesklang['submitted']='Submitted';
$hesklang['clickemail']='View';
$hesklang['set_pri_to']='Set priority to:'; // Action below the ticket list
$hesklang['pri_set_to']='Priority has been set to:';
$hesklang['cat_pri']='The category priority will be used when customers are not allowed to select priority and a form is submitted from the customer interface.';
$hesklang['cat_pri_info']='Your customers are allowed to select priority, so category priority will be ignored.<br /><br />To use category priority instead, turn OFF the following feature in HESK settings:';
$hesklang['def_pri']='Category priority:';
$hesklang['ch_cat_pri']='Set category priority';
$hesklang['cat_pri_ch']='Category priority has been set to:';
$hesklang['err_dbversion']='Too old MySQL version:'; // %s will be replaced with MySQL version
$hesklang['signature_max']='Signature (max 1000 chars)';
$hesklang['signature_long']='User signature is too long! Please limit the signature to 1000 chars';
$hesklang['ip_whois']='IP WHOIS';
$hesklang['ednote']='Edit note message';
$hesklang['ednote2']='Note message saved';
$hesklang['perm_deny']='Permission denied';
$hesklang['mis_note']='Missing note ID';
$hesklang['no_note']='Note with this ID not found';
$hesklang['sacl']='Save and continue later';
$hesklang['reply_saved']='Your reply message has been saved for later.';
$hesklang['submit_as']='Submit as:';
$hesklang['sasc']='Submit as Customer reply';
$hesklang['creb']='Customer reply entered by:';
$hesklang['show_select']='Show &quot;Click to select&quot; as default option';
// Settings
$hesklang['mms']='Maintenance mode';
$hesklang['mmd']='Enable maintenance mode';
// Customer notice
$hesklang['mm1']='Maintenance in progress';
$hesklang['mm2']='In order to perform scheduled maintenance, our help desk has shut down temporarily.';
$hesklang['mm3']='We apologize for the inconvenience and ask that you please try again later.';
// Staff notice
$hesklang['mma1']='Maintenance mode is active!';
$hesklang['mma2']='Customers are not able to use the help desk.';
$hesklang['tools']='Tools';
$hesklang['banemail_intro']='Prevent certain email addresses from submitting forms to your help desk.';
$hesklang['no_banemails']='<i>No emails are being banned.</i>';
$hesklang['eperm']='Permanent email bans:';
$hesklang['bananemail']='Email address to ban';
$hesklang['savebanemail']='Ban this email';
$hesklang['enterbanemail']='Enter the email address you wish to ban.';
$hesklang['validbanemail']='Enter a valid email address (<i>john.doe@example.com</i>) or email domain (<i>@example.com</i>)';
$hesklang['email_banned']='The email address <i>%s</i> was banned and HESK will no longer accept forms from this address.'; // %s will be replaced with email
$hesklang['emailbanexists']='The email address <i>%s</i> is already banned.'; // %s will be replaced with email
$hesklang['email_unbanned']='Email ban deleted';
$hesklang['banby']='Banned by';
$hesklang['delban_confirm']='Delete this ban?';
$hesklang['baned_e']='You have been banned from submitting new support forms.';
$hesklang['baned_ip']='You have been banned from this help desk';
$hesklang['can_ban_emails']='Can ban emails';
$hesklang['can_unban_emails']='Can unban emails (enables Can ban emails)';
$hesklang['eisban']='This email address is banned.';
$hesklang['click_unban']='Click here to unban.';
$hesklang['banip_intro']='Visitors from banned IP addresses will not be able to view or submit forms and login into the help desk.';
$hesklang['ipperm']='Permanent IP bans:';
$hesklang['iptemp']='Login failure bans:';
$hesklang['savebanip']='Ban this IP';
$hesklang['no_banips']='<i>No IPs are being banned.</i>';
$hesklang['bananip']='IP address to ban';
$hesklang['banex']='Examples:';
$hesklang['iprange']='IP range';
$hesklang['ippermban']='Ban this IP permanently';
$hesklang['enterbanip']='Enter the IP address or range you wish to ban.';
$hesklang['validbanip']='Enter a valid IP address or IP range';
$hesklang['ip_banned']='The IP address <i>%s</i> was banned and HESK will no longer accept forms from this IP address.'; // %s will be replaced with ip
$hesklang['ip_rbanned']='The IP range <i>%s</i> was banned and HESK will no longer accept forms from this IP range.'; // %s will be replaced with ip
$hesklang['ipbanexists']='The IP address <i>%s</i> is already banned.'; // %s will be replaced with ip
$hesklang['iprbanexists']='The IP range <i>%s</i> is already banned.'; // %s will be replaced with ip
$hesklang['ip_unbanned']='IP ban deleted';
$hesklang['ip_tempun']='Temporary IP ban deleted';
$hesklang['can_ban_ips']='Can ban ips';
$hesklang['can_unban_ips']='Can unban ips (enables Can ban ips)';
$hesklang['ipisban']='This IP address is banned.';
$hesklang['m2e']='Expires in (minutes)';
$hesklang['info']='Info';
$hesklang['sm_intro']='Display a service message in the customer area, for example to notify them about known issues and important news.';
$hesklang['can_service_msg']='Edit service messages';
$hesklang['new_sm']='New service message';
$hesklang['edit_sm']='Edit service message';
$hesklang['ex_sm']='Existing service messages';
$hesklang['sm_author']='Author';
$hesklang['sm_type']='Type';
$hesklang['sm_published']='Published';
$hesklang['sm_draft']='Draft';
$hesklang['sm_style']='Style';
$hesklang['sm_none']='None';
$hesklang['sm_success']='Success';
$hesklang['sm_info']='Info';
$hesklang['sm_notice']='Notice';
$hesklang['sm_error']='Error';
$hesklang['sm_mtitle']='Title';
$hesklang['sm_msg']='Message';
$hesklang['sm_e_title']='Enter service message title';
$hesklang['sm_e_msg']='Enter service message';
$hesklang['sm_e_id']='Missing message ID';
$hesklang['sm_added']='A new service message has been added';
$hesklang['sm_deleted']='Service message deleted';
$hesklang['sm_not_found']='This service message does not exist';
$hesklang['no_sm']='No service messages';
$hesklang['del_sm']='Delete this service message?';
$hesklang['sm_mdf']='Service message has been saved';
$hesklang['sska']='Show suggested articles';
$hesklang['taws']='These articles were suggested:';
$hesklang['defaults']='Defaults';
$hesklang['pncn']='Select notify customer option in the new form form';
$hesklang['pncr']='Select notify customer option in the form reply form';
$hesklang['pssy']='Show what knowledgebase articles were suggested to customers';
$hesklang['ccct']='Customer resolve';
$hesklang['custnot']='Notify customers when';
$hesklang['notnew']='A form is submitted';
$hesklang['notclo']='A form is marked Resolved';
$hesklang['spamn']='SPAM notice';
$hesklang['spam_inbox']='<span style="color:red"><b>No confirmation email?</b><br />We sent a confirmation message to your email address. If you do not receive it within a few minutes, please check your Junk, Bulk or Spam folders. Mark the message as <b>Not SPAM</b> to avoid problems receiving our correspondence in the future.</span>';
$hesklang['s_ekb']='Enable Knowledgebase';
$hesklang['ekb_n']='<b>NO</b>, disable Knowledgebase';
$hesklang['ekb_y']='<b>YES</b>, enable Knowledgebase';
$hesklang['ekb_o']='<b>YES</b>, use HESK as a Knowledgebase only (<i>disable help desk</i>)';
$hesklang['kb_set']='Knowledgebase settings';
$hesklang['kbo1']='Knowledgebase-only mode';
$hesklang['kbo2']='<br /><br />Visitors cannot submit new forms and are taken directly to the knowledgebase.';
$hesklang['fpass']='Forgot your password?';
$hesklang['passr']='Password reset';
$hesklang['passa']='Allow users to reset a forgot password over email';
$hesklang['passe']='Enter your email address';
$hesklang['noace']='No account with that email address was found';
$hesklang['pemls']='We sent you an email with instructions on how to reset your password';
$hesklang['reset_password']='Reset your help desk password'; // Email subject
$hesklang['ehash']='Invalid or expired password reset link';
$hesklang['ehaip']='Wrong IP address. Passwords may only be reset from the IP address that requested password reset.';
$hesklang['resim']='<b>Setup your new password in the form below!</b>';
$hesklang['permissions']='Permissions';
$hesklang['atype']='Account type';
$hesklang['astaff']='Staff';
$hesklang['oon1']='Send me only open forms';
$hesklang['oon2']='Send me all my forms';
$hesklang['anyown']='Any owner';
$hesklang['pfr']='Another POP3 fetching task is still in progress.';
$hesklang['pjt']='Task timeout';
$hesklang['pjt2']='minutes after start';
$hesklang['nkba']='Knowledgebase search requires enough unique articles to work properly.<br /><br />Consider adding more articles to the knowledgebase to improve search and article suggestion results.';
$hesklang['saa']='Sticky articles are displayed at the top of articles list';
$hesklang['yhbr']='You have been locked out the system for %s minutes because of too many replies to a form.';

// Language for Google reCaptcha API version 2
// Supported language codes: https://developers.google.com/recaptcha/docs/language
// If your language is NOT in the supported langauges, leave 'en'
$hesklang['RECAPTCHA']='en';


// Added or modified in version 2.7.0
$hesklang['imap']='IMAP Fetching';
$hesklang['imaph']='IMAP Host';
$hesklang['imapp']='IMAP Port';
$hesklang['enc']='Encryption';
$hesklang['ssl']='SSL';
$hesklang['tls']='TLS';
$hesklang['none']='None';
$hesklang['imapu']='IMAP Username';
$hesklang['imapw']='IMAP Password';
$hesklang['imaptest']='Test IMAP connection';
$hesklang['ifd']='[HESK] IMAP FETCHING IS DISABLED IN SETTINGS';
$hesklang['iei']='[HESK] PHP IMAP extension is not installed.';
$hesklang['ifr']='Another IMAP fetching task is still in progress.';
$hesklang['arp']='Auto reload page';
$hesklang['arpp']='Automatically reload page with form list every:';
$hesklang['seconds']='seconds'; // Reload page every X 'seconds'
$hesklang['minutes']='minutes'; // Reload page every X 'minutes'
$hesklang['atbr']='This form needs to be assigned before it can be replied to.';
$hesklang['attm']='Assign this form to me';
$hesklang['owneed']='Owner needed';
$hesklang['taat']='This form is already assigned to <b>%s</b>.';
$hesklang['scoy']='Are you sure you want to assign it to yourself?';
$hesklang['scot']='Are you sure you want to assign it to %s?';
$hesklang['ycto']='YES, change the owner';
$hesklang['ncto']='NO, keep current owner';
$hesklang['fass']='Require owner';
$hesklang['req_sub']='Require subject';
$hesklang['req_msg']='Require message';
$hesklang['req_email']='Require email';
$hesklang['default_subject']='Form from %s'; // Default ticket subject, %s will be replaced with name
$hesklang['off-hide']='Hide in customer form';
$hesklang['ons']='ON - Everyone'; // For admin settings page
$hesklang['not_valid_email']='Enter a valid email address or leave this field empty';
$hesklang['write_down']='<span style="color:red">We recommend that you write down your Form ID for future reference.</span>';
$hesklang['re_confirm1']='Disabling this will also disable "Require email to view forms" under "Security". Proceed?';
$hesklang['re_confirm2']='Enabling this will also enable "Require email" under "Features". Proceed?';
$hesklang['can_email_tpl']='Edit email templates'; // Staff permission
$hesklang['et_intro']='Modify emails that are sent to your staff and customers';
$hesklang['file']='File';
$hesklang['efile']='Editing file';
$hesklang['desc_forgot_ticket_id']       = '(Customer) Forgot form tracking ID';
$hesklang['desc_new_reply_by_staff']     = '(Customer) New staff reply';
$hesklang['desc_new_ticket']             = '(Customer) Form received';
$hesklang['desc_ticket_closed']          = '(Customer) Form closed/resolved';
$hesklang['desc_category_moved']         = '(Staff) Form moved to a new category';
$hesklang['desc_new_reply_by_customer']  = '(Staff) New customer reply';
$hesklang['desc_new_ticket_staff']       = '(Staff) New form submitted';
$hesklang['desc_ticket_assigned_to_you'] = '(Staff) A form was assigned to you';
$hesklang['desc_new_pm']                 = '(Staff) New private message';
$hesklang['desc_new_note']               = '(Staff) New note on a form assigned to you';
$hesklang['desc_reset_password']         = '(Staff) Reset your password';
$hesklang['et_e_id']='Missing template ID';
$hesklang['et_fm']='This email template file is missing';
$hesklang['et_fw']='This email template file is not writable';
$hesklang['updated_on']='Updated on';
$hesklang['ticket_url']='Form URL';
$hesklang['pm_url']='Private message URL';
$hesklang['et_num']='Number of forms';
$hesklang['et_list']='List of support forms';
$hesklang['et_empty']='Email template cannot be empty';
$hesklang['et_saved']='Email template saved';
$hesklang['source']='Source';
$hesklang['select_category']='Select a category';
$hesklang['select_category_text']='What form would you like to submit?';
$hesklang['select_category_staff']='Select form category';
$hesklang['scat']='Category select limit';
$hesklang['scat2']='(a select box will show if category count is higher)';
$hesklang['new_cf']='New custom field';
$hesklang['cf_intro']='Use this feature to add custom fields to the Submit a form form so you can collect additional data from customers.';
$hesklang['cf_public']='Public';
$hesklang['cf_private']='Staff only';
$hesklang['cf_cust']='For customers';
$hesklang['cf_all']='All';
$hesklang['cf_cat']='Selected';
$hesklang['cf_ctrl']='Tip: hold down CTRL key to select multiple categories';
$hesklang['visibility']='Visibility';
$hesklang['cf_save']='Save custom field';
$hesklang['ex_cf']='Active custom fields';
$hesklang['no_cf']='No active custom fields';
$hesklang['del_cf']='Delete this custom field? This will also delete any saved custom field data from the database!';
$hesklang['cf_e_id']='Invalid ID';
$hesklang['edit_cf']='Edit custom field';
$hesklang['cf_deleted']='Custom field deleted';
$hesklang['cf_not_found']='This custom field does not exist';
$hesklang['err_custname']='Enter custom field name';
$hesklang['cf_added']='A new custom field has been added';
$hesklang['cf_nocat']='Select at least one category for this custom field';
$hesklang['cf_mdf']='Custom field has been saved';
$hesklang['opt4']='Options for this checkbox, enter one option per line. Each line will be a choice your customers can choose from, multiple choices are possible.';
$hesklang['atl1']='Enter at least one option.';
$hesklang['sch']='Hidden';
$hesklang['meml3']='Allow multiple emails to be entered';
$hesklang['dmin']='Minimum accepted date';
$hesklang['dmax']='Maximum accepted date';
$hesklang['d_day']='day(s)';
$hesklang['d_week']='week(s)';
$hesklang['d_month']='month(s)';
$hesklang['d_year']='year(s)';
$hesklang['d_any']='Any date';
$hesklang['d_fixed']='Fixed date';
$hesklang['d_relative']='Relative date';
$hesklang['d_mm']='Minimum date may not be higher than maximum date';
$hesklang['d_emin']='Minimum date for <i>%s</i> is %s'; // Minimum date for FIELD_NAME is DATE
$hesklang['d_emax']='Maximum date for <i>%s</i> is %s'; // Maximum date for FIELD_NAME is DATE
$hesklang['d_format']='Date display format';
$hesklang['d_custom']='Custom format';
$hesklang['d_ci']='ADVANCED USERS ONLY: a valid PHP date format, see PHP manual.';
$hesklang['cf_noe']='Enter a valid email address into <i>%s</i>';
$hesklang['cf_noem']='Enter one or more valid email addresses into <i>%s</i>';
$hesklang['cf_limit']='You have 50 active custom fields, no new can be created.';
$hesklang['can_resolve']='Can resolve forms';
$hesklang['can_change_cat']='Change form category (to any)';
$hesklang['can_change_own_cat']='Change form category (to allowed)';
$hesklang['can_submit_any_cat']='Can submit forms to any category';
$hesklang['noauth_submit']='You are not authorized to submit forms to this category!';
$hesklang['noauth_move']='You are not authorized to move forms to this category!';
$hesklang['noauth_resolve']='You are not authorized to resolve forms!';
$hesklang['force_ssl']='Force SSL connections';
$hesklang['d_ssl']='<i>disabled</i> - open this page with https:// to manage this option';
$hesklang['enn']='Except for forms from emails if email subject contains:';
$hesklang['scno']='This status cannot be changed';
$hesklang['statuses']='Statuses';
$hesklang['statuses_intro']='Use this tool to add custom form statuses to your help desk';
$hesklang['color']='Color';
$hesklang['csscl']='CSS class or color';
$hesklang['clr_view']='Color preview on text';
$hesklang['cbc']='Changeable by customers';
$hesklang['ccc']='Can customers change this status?';
$hesklang['del_status']='Delete this status?';
$hesklang['ex_status']='Existing statuses';
$hesklang['status_hesk']='Built-in Statuses (cannot be modified here)';
$hesklang['status_custom']='Custom Statuses';
$hesklang['list_tkt_status']='List all forms with this status';
$hesklang['new_status']='New custom status';
$hesklang['edit_status']='Edit custom status';
$hesklang['err_status']='Enter the status name';
$hesklang['status_added']='A new custom status has been added';
$hesklang['status_e_id']='Invalid ID';
$hesklang['status_mdf']='Custom status has been saved';
$hesklang['status_deleted']='Custom status deleted';
$hesklang['status_not_found']='This custom status does not exist';
$hesklang['status_not_empty']='This status cannot be removed because forms with this status exist';
$hesklang['status_limit']='You have 100 custom statuses, no new can be created.';
$hesklang['public_link']='Public link'; // Link to the public KB article in the private KB pages
$hesklang['frames']='Frames';
$hesklang['frames2']='Prevent loading HESK in frames on third party domains';
$hesklang['numsub']='Submitted forms'; // Will show how many tickets this user submitted
$hesklang['hidf']='Hidden inputs are not visible to customers on the Submit a form form (the value will still be visible on form details page if they are set as public). They behave as normal text fields for staff members.';
$hesklang['rcheck']='Do not select a default option';
$hesklang['refresh_page']='Refresh this page';
$hesklang['banip']='Ban IPs';
$hesklang['del_kba']='Delete this article';
$hesklang['del_kbaa']='Permanently delete this article';
$hesklang['hni1']='HESK not installed yet?';
$hesklang['hni2']='It appears that this help desk has not been properly installed and configured yet.';
$hesklang['cf']='Cache folder';
$hesklang['e_cdir']='Hesk will not be able to parse emails or cache results unless the cache folder exists and is writable.';
$hesklang['step1']='Step 1';
$hesklang['step2']='Step 2';
$hesklang['dffs']='When download completes, delete the file from server';
$hesklang['fd']='Export file deleted from server';


// Added or modified in version 2.8.0
$hesklang['TZ']='Timezone';
$hesklang['thist17']='<li class="smaller">%s | submitted by IMAP fetching</li>';
$hesklang['sir3']='Invisible reCAPTCHA';
$hesklang['invisible']='invisible';
$hesklang['rcpb']='Site key';
$hesklang['rcpv']='Secret key';
$hesklang['recaptcha_error']='Could not validate reCAPTCHA SPAM protection.';
$hesklang['imap_not']='PHP is not compiled with IMAP support';
$hesklang['imap_warning']='user %1$s has the same email address as your IMAP fetching email address: %2$s'; // %1$s = username, %2$s = email address
$hesklang['pop3_warning']='user %1$s has the same email address as your POP3 fetching email address: %2$s'; // %1$s = username, %2$s = email address
$hesklang['fetch_warning']='This could result in an email loop where new forms are being created from user email notifications. Your fetching email address should be unique and not used by anyone else.';
$hesklang['can_view_ass_by']='Can view forms he/she assigned to others';
$hesklang['can_privacy']='Can anonymize forms';
$hesklang['confirm_anony']='Anonymize this form';
$hesklang['anon_selected']='Anonymize selected forms';
$hesklang['privacy_anon_info']='Remove all personally-identifiable data and content from forms (customer name, email, message, attachments, IP...), but keep forms in the database for statistics (right to be forgotten).';
$hesklang['success_anon']='Form successfully anonymized';
$hesklang['num_tickets_anon']='Number of forms anonymized: <b>%d</b>';
$hesklang['num_tickets_deleted']='Number of forms deleted: <b>%d</b>';
$hesklang['anon_IP']='0.0.0.0'; // IP in anonymized tickets
$hesklang['anon_name']='[Customer]'; // Customer name in anonymized tickets
$hesklang['anon_email']=''; // Customer email in anonymized tickets
$hesklang['anon_subject']='[Subject]'; // Ticket subject of anonymized tickets
$hesklang['anon_message']='[Message]'; // Ticket message in anonymized tickets
$hesklang['thist18']='<li class="smaller">%s | anonymized by %s</li>';
$hesklang['print_selected']='Print selected forms';
$hesklang['with_selected']='With selected:';
$hesklang['assign_selected']='Assign selected to:';
$hesklang['assign_no']='No owner selected, no changes made';
$hesklang['assign_1']='Selected forms have been set to Unassigned.';
$hesklang['assign_2']='Form ID %1$s set to Unassigned'; // %1$s = ticket numerical ID
$hesklang['assign_3']='%1$s error: already assigned to %2$s'; // %1$s = ticket tracking ID, %2$s = owner name
$hesklang['assign_4']='%1$s assigned to %2$s'; // %1$s = ticket tracking ID, %2$s = owner name
$hesklang['assign_5']='%1$s error: %2$s doesn\'t have access to form category'; // %1$s = ticket tracking ID, %2$s = owner name
$hesklang['assign_log']='Bulk form assign result:<br /><br />Assigned: %1$s<br />Errors: %2$s<br /><br />Log:<br /><pre>%3$s</pre>'; // %1$s = number of tickets assigned, %2$s = number of errors, %3$s = log
$hesklang['IP_addr']='IP address';
$hesklang['moret']='More options'; // More options button title
$hesklang['btn_more']='More'; // More options button text
$hesklang['btn_print']='Print';
$hesklang['btn_edit']='Edit';
$hesklang['btn_lock']='Lock form';
$hesklang['btn_unlock']='Unlock form';
$hesklang['btn_tag']='Tag form';
$hesklang['btn_resend']='Re-send email notification';
$hesklang['btn_untag']='Untag form';
$hesklang['btn_import_kb']='Import to Knowledgebase';
$hesklang['btn_anony']='Anonymize form';
$hesklang['btn_delt']='Delete form';
$hesklang['btn_delr']='Delete reply';
$hesklang['ernf']='Reply not found';
$hesklang['tns']='Form notifications were sent again';
$hesklang['rns']='Reply notifications were sent again';
$hesklang['fname']='First Name';
$hesklang['export_selected']='Export selected forms';
$hesklang['btn_export']='Export to XML for Excel';
$hesklang['recaptcha']='reCAPTCHA';

// Added or modified in HESK 3.0.0
$hesklang['responses']='Responses';
$hesklang['team']='Team';
$hesklang['banemail']='Ban Emails';
$hesklang['sm_title']='Service Messages';
$hesklang['et_title']='Email Templates';
$hesklang['tab_4']='Custom Fields';
$hesklang['reports_tab']='Run Reports'; // Tab title
$hesklang['export']='Export Forms'; // Tab title
$hesklang['add_cat']='New Category';
$hesklang['cat_name']='Name'; // Category name table header
$hesklang['cat_type']='Type';
$hesklang['cat_private']='Private';
$hesklang['cat_public']='Public';
$hesklang['create_cat']='Save Category';
$hesklang['genl']='Link copied to clipboard';
$hesklang['delban']='Unban';
$hesklang['sm_content']='Content';
$hesklang['sm_settings']='Settings';
$hesklang['sm_save']='Save';
$hesklang['sm_preview']='Preview';
$hesklang['wizard_back']='Back'; // Create/Edit sidebar button to go back a step
$hesklang['wizard_next']='Next'; // Create/Edit sidebar button to go forward a step
$hesklang['sm_go_to_settings']='Go to Settings';
$hesklang['sm_return_to_editing']='Return to Editing';
$hesklang['email_tpl_title']='Title';
$hesklang['rdesc']='Description';
$hesklang['edit_email_template']='Edit email template';
$hesklang['et_save']='Save Changes';
$hesklang['status_custom_none']='No custom statuses. You can add them by clicking "New custom status" above.';
$hesklang['status_save']='Save';
$hesklang['err_no_settings_section']='No settings section was provided.';
$hesklang['sit']='Image Type';
$hesklang['q_q']='Question (HTML code is <span class="success">allowed</span>)';
$hesklang['q_a']='Answer';
$hesklang['admin_login']='Welcome! Please log in.';
$hesklang['this_field_is_required']='This field is required';
$hesklang['reset_your_password']='Reset your password';
$hesklang['reset_password_instructions']='Please fill out the form below. We will send you a link to where you can reset your password.';
$hesklang['enter_email']='Enter email';
$hesklang['passs']='Reset Password';
$hesklang['password_reset_check_your_email']='Check your email';
$hesklang['password_reset_link_sent']='We sent you a link to reset your password.';
$hesklang['back_to_login']='Back to login';
$hesklang['inbox']='Inbox';
$hesklang['outbox']='Outbox';
$hesklang['m_new']='New Message';
$hesklang['m_from']='From'; // Mail "from" address
$hesklang['m_to']='To'; // Mail "to" address
$hesklang['m_sub']='Subject'; // Mail subject
$hesklang['pager_first']='First';
$hesklang['pager_previous']='Prev';
$hesklang['pager_next']='Next';
$hesklang['pager_last']='Last';
$hesklang['new_team_member']='New Team Member';
$hesklang['role']='Role';
$hesklang['optional']='Optional';
$hesklang['edit_profile']='Edit Profile';
$hesklang['assigned_to']='Assigned to';
$hesklang['contact']='Contact';
$hesklang['unban_email']='Unban this email';
$hesklang['unban_ip']='Unban this IP';
$hesklang['addnote']='Add note';
$hesklang['show_previous_replies']='Show previous replies';
$hesklang['thist']='Form History';
$hesklang['type_your_message']='Type your message';
$hesklang['close_button_text']='Close';
$hesklang['create_new_ticket']='Create New Form';
$hesklang['ktool']='Knowledgebase tools';
$hesklang['delete_article']='Delete article';
$hesklang['view_existing_tickets']='View existing forms';
$hesklang['view_existing']='View existing form';
$hesklang['popart']='Top articles';
$hesklang['latart']='Latest articles';
$hesklang['sub_ticket']='Submit form';
$hesklang['how_can_we_help']='Welcome to DGSC form submission!';
$hesklang['search_for_articles']='Search for articles';
$hesklang['submit_a_support_request']='Submit a Form';
$hesklang['verify_header']='SPAM Prevention';
$hesklang['this_field_is_required']='This field is required';
$hesklang['ticket_details']='Form Details';
$hesklang['yes_title_case']='Yes';
$hesklang['no_title_case']='No';
$hesklang['rh']='Rated as helpful';
$hesklang['rnh']='Rated as not helpful';
$hesklang['ac']='Articles in this category';
$hesklang['sr']='Search Results';
$hesklang['no_results_found']='No Results Found';
$hesklang['ad']='Article Details';
$hesklang['hni3']='To install HESK, follow <a class="link" href="docs/">Instructions in the documentation</a>';
$hesklang['site_theme']='Site theme';
$hesklang['test_theme_folder']='Test theme folder';
$hesklang['test_theme_folder_description']='Testing the theme folder for valid themes. Only themes that pass all tests are properly installed.';
$hesklang['err_site_theme']='Please select Hesk theme';
$hesklang['confirm']='Confirm';
$hesklang['confirm_deletion']='Confirm Deletion';
$hesklang['confirm_delete_status']='Are you sure you want to delete this custom status?';
$hesklang['critical']='Critical';
$hesklang['canned_add']='New canned response';
$hesklang['ticket_tpl_add']='New form template';
$hesklang['help_desk']='Help Desk'; // Displayed on staff sidebar menu

// Added or modified in HESK 3.1.0
$hesklang['TIMEAGO_LANG_FILE']='jquery.timeago.en.js'; // Name of the proper language file in folder /js/timeago/locales
$hesklang['tdis']='Time display';
$hesklang['tdisd']='Date and time';
$hesklang['tdisa']='Time ago (example: 5 hours ago)';
$hesklang['nav_templates']='Templates'; // Admin panel navigation item
$hesklang['hide_replies']='Hide form replies';
$hesklang['hide_replies_no']='Do not hide, always show all replies';
$hesklang['hide_replies_yes']='Hide all replies except the last:';
$hesklang['hide_replies_def']='Show the last staff reply and any subsequent customer replies';
$hesklang['reply_by']='Reply by'; // Reply by NAME
$hesklang['btt']='Back to Top';
$hesklang['lwidth']='Limit form width';
$hesklang['lwidtall']='Use the full available width';
$hesklang['lwidtpx']='Maximum width in pixels:';
// 3-letter days of the week
$hesklang['mon']='Mon';
$hesklang['tue']='Tue';
$hesklang['wed']='Wed';
$hesklang['thu']='Thu';
$hesklang['fri']='Fri';
$hesklang['sat']='Sat';
$hesklang['sun']='Sun';
$hesklang['clear']='Clear'; // delete field value
$hesklang['first_day_of_week']='0'; // first day of week; 0 = Sunday, 1 = Monday, 2 = Tuesday, ...
$hesklang['cat_intro']='Here you are able to manage categories. Categories are useful
for categorizing forms by relevance (for example &quot;Sales&quot;,
&quot;Hardware problems&quot;, &quot;PHP/MySQL problems&quot; etc) and for
assigning users to categories.'; // this was in before 3.0.x, bringing it back
$hesklang['spam_req']='At least one SPAM prevention measure must be enabled!';
$hesklang['modules']='Modules';
$hesklang['modules_demo']='This module is currently available only in %s'; // %s = Hesk cloud link
$hesklang['see_demo']='Try the live demo here: %s'; // %s = Hesk demo link
$hesklang['statistics']['tab']='Statistics';
$hesklang['statistics']['intro']='This report will give you insight into your help desk usage and staff performance.';
$hesklang['statistics']['ntsp']='No forms in the selected time period.';
$hesklang['statistics']['pie_title_ro']='Open vs Resolved forms';
$hesklang['statistics']['open']='Open';
$hesklang['statistics']['resolved']='Resolved';
$hesklang['statistics']['pie_title_as']='Open forms: Assigned vs Unassigned';
$hesklang['statistics']['ass']='Assigned';
$hesklang['statistics']['unas']='Unassigned';
$hesklang['statistics']['pie_title_au']='Open forms: Answered vs Unanswered';
$hesklang['statistics']['answered']='Answered';
$hesklang['statistics']['unanswered']='Unanswered';
$hesklang['statistics']['pie_title_so']='Status of open forms';
$hesklang['statistics']['retic']='Forms:';
$hesklang['statistics']['chart_title_md']='Forms per day of month';
$hesklang['statistics']['chart_title_wd']='Forms per weekday';
$hesklang['statistics']['chart_title_hd']='Forms per day hour';
$hesklang['statistics']['chart_title_tfr']='Time to first staff reply';
$hesklang['statistics']['chart_title_tfrc']='Forms replied to within a time frame';
$hesklang['statistics']['chart_title_ttr']='Time from submitting to resolving a form';
$hesklang['statistics']['chart_title_ttrc']='Forms resolved within a time frame';
$hesklang['statistics']['chart_title_sr']='Staff replies';
$hesklang['statistics']['chart_title_srt']='Staff replies per form';
$hesklang['statistics']['chart_title_srtr']='Staff replies per form (resolved forms only)';
$hesklang['statistics']['chart_title_srt1']='Staff replies per form (forms with at least 1 reply)';
$hesklang['statistics']['ct_30']='30 minutes';
$hesklang['statistics']['ct_1h']='1 hour';
$hesklang['statistics']['ct_2h']='2 hours';
$hesklang['statistics']['ct_4h']='4 hours';
$hesklang['statistics']['ct_1d']='1 day';
$hesklang['statistics']['ct_2d']='2 days';
$hesklang['statistics']['ct_3d']='3 days';
$hesklang['statistics']['ct_1w']='1 week';
$hesklang['statistics']['ct_wp']='> 1 week';
$hesklang['statistics']['ct_1m']='1 month';
$hesklang['statistics']['ct_mp']='> 1 month';
$hesklang['statistics']['axis1']='% of forms replied';
$hesklang['statistics']['axis2']='% of forms resolved';
$hesklang['statistics']['axis3']='% of forms';
$hesklang['statistics']['axis4']='Time to first reply';
$hesklang['statistics']['axis5']='Time to resolved';
$hesklang['statistics']['axis6']='Number of replies';
$hesklang['statistics']['axis7']='Number of forms';
$hesklang['statistics']['axis8']='Weekday';
$hesklang['statistics']['axis9']='Hour';
$hesklang['statistics']['axis10']='Day of month';
$hesklang['statistics']['tr_0']='No reply';
$hesklang['statistics']['tr_1']='1 reply';
$hesklang['statistics']['tr_2']='2 replies';
$hesklang['statistics']['tr_5']='3-5 replies';
$hesklang['statistics']['tr_10']='6-10 replies';
$hesklang['statistics']['tr_99']='> 10 replies';
$hesklang['statistics']['average']='Average';
$hesklang['statistics']['atfr']='Average hours and minutes to first staff reply:';
$hesklang['statistics']['attr']='Average hours and minutes to resolve a form:';
$hesklang['statistics']['about']='about %s'; // approximate time; "about 5 days 3 hous"
$hesklang['statistics']['na']='N/A';
$hesklang['statistics']['trept']='Total forms staff replied to:';
$hesklang['statistics']['trnr']='Total forms resolved without a staff reply:';
$hesklang['statistics']['tsr']='Total staff replies:';
$hesklang['statistics']['tsrt']='Average staff replies per form:';
$hesklang['statistics']['tsro']='Average staff replies per form (forms with at least 1 staff reply):';
$hesklang['statistics']['tsrc']='Average staff replies required to resolve a form:';
$hesklang['statistics']['tsrr']='Average staff replies required to resolve a form (forms with at least 1 staff reply):';
$hesklang['sep_1000']=','; // separator between every group of thousands: 1,000,000
$hesklang['sep_dec']='.'; // separator between full and decimal numbers: 0.99
$hesklang['and_more']='and much more...'; // last item in a list

// Added or modified in HESK 3.2.0
$hesklang['escalate']['tab']='Escalate'; // Menu link
$hesklang['escalate']['page_title']='Escalate Forms'; // Page H2 title
$hesklang['escalate']['intro']='This module will help you escalate forms that are not attended to on time.';
$hesklang['escalate']['feat1']='Forms not assigned, replied to, or resolved within a timeframe';
$hesklang['escalate']['feat2']='forms approaching due date and overdue forms';
$hesklang['escalate']['feat3']='automatically change form priority, re-assign a form, send an email notification';
$hesklang['escalate']['feat4']='apply rules based on form category, owner, status';
$hesklang['escalate']['prefix']='Escalated:'; // Email subject prefix, e.g. "Escalated: [XXX-XXX-XXXX] Test ticket"
$hesklang['escalate']['active_rules']='Active rules';
$hesklang['escalate']['new']='New escalation rule';
$hesklang['escalate']['no_rules']='You do not have any escalation rules. Create one by clicking the &quot;New escalation rule&quot; button above.';
$hesklang['escalate']['title']='Rule title';
$hesklang['escalate']['titlet']='A descriptive title, for example: Re-assign forms not replied to within a day';
$hesklang['escalate']['default_title']='Rule by %1$s'; // Default rule title; %1$s = user name
$hesklang['escalate']['trigger']='Rule trigger';
$hesklang['escalate']['trigt']='Set the condition that will trigger (run) this rule.';
$hesklang['escalate']['hits']='Hits'; // How many times a rule has been triggered
$hesklang['escalate']['step1']='Condition'; // Title of step 1 when creating/editing a rule
$hesklang['escalate']['step2']='Action'; // Title of step 2 when creating/editing a rule
$hesklang['escalate']['step3']='Apply to'; // Title of step 3 when creating/editing a rule
$hesklang['escalate']['delete']='Delete this rule?';
$hesklang['escalate']['edit']='Editing escalation rule ID %1$s'; // %1$s = rule ID number
$hesklang['escalate']['ifat']='A support form is:'; // If a ticket is not (resolved) within X (minutes) of submitting, then (resend notification)
$hesklang['escalate']['nrep']='not replied to by staff';
$hesklang['escalate']['nrepc']='not replied to by customer';
$hesklang['escalate']['nass']='not assigned';
$hesklang['escalate']['nres']='not resolved';
$hesklang['escalate']['ndue']='approaching due date';
$hesklang['escalate']['odue']='overdue';
$hesklang['escalate']['within']='Within:';
$hesklang['escalate']['minutes']='minutes';
$hesklang['escalate']['hours']='hours';
$hesklang['escalate']['days']='days';
$hesklang['escalate']['weeks']='weeks';
$hesklang['escalate']['months']='months';
$hesklang['escalate']['years']='years';
$hesklang['escalate']['ofs']='of being submitted';
$hesklang['escalate']['resend']='Re-send email notifications:';
$hesklang['escalate']['force']='Always send, disregard staff settings';
$hesklang['escalate']['noforce']='Respect staff notifications settings';
$hesklang['escalate']['setpri']='Set priority to:';
$hesklang['escalate']['setsta']='Set status to:';
$hesklang['escalate']['assto']='Assign form to:';
$hesklang['escalate']['asm']='Another staff member';
$hesklang['escalate']['notify']='Notify staff members...';
$hesklang['escalate']['ato']='Apply to:';
$hesklang['escalate']['tic']='Forms in category:';
$hesklang['escalate']['tat']='Forms assigned to:';
$hesklang['escalate']['tws']='Forms with status:';
$hesklang['escalate']['tall']='Apply this rule to existing and future forms';
$hesklang['escalate']['tfn']='Apply this rule to future forms only, ignore existing forms';
$hesklang['escalate']['tfi']='Apply this rule only to forms with ID higher than:';
$hesklang['escalate']['save']='Save rule';
$hesklang['escalate']['e_tt']='Time should be between 1 and 10000';
$hesklang['escalate']['e_a']='Select at least one action to perform on matching forms';
$hesklang['escalate']['nocat']='Select at least one category';
$hesklang['escalate']['nouser']='Select at least one user';
$hesklang['escalate']['nostatus']='Select at least one status';
$hesklang['escalate']['nocata']='%1$s doesn\'t have access to these categories:'; // %1$s = user name
$hesklang['escalate']['rule_added']='New rule has been created';
$hesklang['escalate']['mdf']='Rule settings have been saved';
$hesklang['escalate']['e_id']='No rule with this ID found';
$hesklang['escalate']['deleted']='Selected rule has been deleted';
$hesklang['escalate']['edit_notice']='changing the rule trigger will have no effect on any form already escalated by this rule (unless you reset the rule).';
$hesklang['escalate']['reset']='Reset this rule';
$hesklang['escalate']['reset2']='Are you sure you want to reset this rule?<br><br>Rule hits will go to 0 and any form that matches this rule will be escalated again.';
$hesklang['escalate']['reset3']='Selected rule has been reset';
$hesklang['escalate']['log_title']='Rule #%1$s (%2$s)'; // Used in ticket history log. %1$s = rule ID, %2$s = rule title
$hesklang['escalate']['thist1']='<li class="smaller">%1$s | escalated by %2$s:</li>'; // Used in ticket history log. %1$s = date, %2$s = rule log title (above)
$hesklang['escalate']['thist2']='<li class="smaller">%1$s | - set priority to %2$s</li>'; // %1$s = date, %2$s = priority
$hesklang['escalate']['thist3']='<li class="smaller">%1$s | - assign to %2$s</li>'; // %1$s = date, %2$s = owner
$hesklang['escalate']['thist4']='<li class="smaller">%1$s | - send staff notification</li>';
$hesklang['escalate']['thist5']='<li class="smaller">%1$s | - send staff notification (forced)</li>';
$hesklang['escalate']['thist6']='<li class="smaller">%1$s | - error: %2$s doesn\'t have access to form category</li>'; // %1$s = date, %2$s = owner
$hesklang['escalate']['thist7']='<li class="smaller">%1$s | - error: %2$s doesn\'t have permission to view forms</li>'; // %1$s = date, %2$s = owner
$hesklang['escalate']['thist8']='<li class="smaller">%1$s | - error: no other user who can view this form</li>'; // %1$s = date
$hesklang['escalate']['thist9']='<li class="smaller">%1$s | - notice: priority already set to %2$s</li>'; // %1$s = date, %2$s = priority
$hesklang['escalate']['thist10']='<li class="smaller">%1$s | - notice: already assigned to %2$s</li>'; // %1$s = date, %2$s = owner
$hesklang['escalate']['thist11']='<li class="smaller">%1$s | - notify: %2$s</li>'; // %1$s = date, %2$s = list of users
$hesklang['escalate']['thist12']='<li class="smaller">%1$s | - set status to %2$s</li>'; // %1$s = date, %2$s = status
$hesklang['escalate']['thist13']='<li class="smaller">%1$s | - notice: status already set to %2$s</li>'; // %1$s = date, %2$s = status
$hesklang['escalate']['active']='Active'; // Is the rule active (live)?
$hesklang['escalate']['activate']='Activate this rule (start using it)';
$hesklang['escalate']['activated']='Selected rule has been activated'; // %1$s = rule log title
$hesklang['escalate']['deactivate']='Deactivate this rule (stop using it)';
$hesklang['escalate']['deactivated']='Selected rule has been deactivated'; // %1$s = rule log title
$hesklang['escalate']['no_active']='No active escalation rules';
$hesklang['escalate']['matched']='Number of matching forms found: %1$s '; // %1$s = number of tickets
$hesklang['escalate']['tools']='Tools';
$hesklang['escalate']['test']='Simulate this rule';
$hesklang['escalate']['testa']='Simulate all rules';
$hesklang['escalate']['testaa']='Simulate all active rules';
$hesklang['escalate']['testr']='Simulation results';
$hesklang['escalate']['rsim']='Repeat simulation';
$hesklang['escalate']['tbef']='Before a rule is live, you need to activate it by clicking the checkbox in the &quot;ACTIVE&quot; column.<br><br>
                               We strongly recommend that you <strong>simulate</strong> each rule by clicking the %1$s (Simulate this rule) icon in the rules table
                               to see how it will affect your existing forms before activating it.<br><br>
                               <strong>Active rules are processed every %2$s minutes. A form can only be escalated once by each rule</strong>.'; // %1$s = replaced by icon, %2$s = number of minutes, usually 5 or more
$hesklang['escalate']['sim']='SIMULATION MODE, no changes to the database';
$hesklang['escalate']['sic']='SIMULATION COMPLETE';
$hesklang['escalate']['r']='[RULE]';
$hesklang['escalate']['i']='[INFO]';
$hesklang['multopt']='Tip: hold down CTRL key to select multiple options';
$hesklang['desc_ticket_escalated']='(Staff) Form has been escalated'; // Email description in admin panel
$hesklang['ticket_formatting_staff']='Form Formatting (Staff)';
$hesklang['ticket_formatting_plaintext']='Plain Text';
$hesklang['ticket_formatting_rich_text']='Rich Text (HTML)';
$hesklang['due_date']='Due date';
$hesklang['invalid_due_date']='An invalid due date was entered.';
$hesklang['thist19']='<li class="smaller">%s | due date updated to %s by %s</li>'; // %s = date, new due date, user making change
$hesklang['thist20']='<li class="smaller">%s | due date removed by %s</li>'; // %s = date, user making change
$hesklang['due_date_updated']='Form due date has been updated.';
$hesklang['menu_kb_manage']='Manage'; // Left admin menu Knowledgebase "Manage" tab
$hesklang['menu_kb_view']='View'; // Left admin menu Knowledgebase "View" tab
$hesklang['a_select']='Select all';
$hesklang['a_deselect']='Deselect all';
$hesklang['a_toggle']='Toggle all';
$hesklang['ql_all']='All forms';
$hesklang['ql_alo']='All open forms';
$hesklang['ql_fit']='Filtered forms';
$hesklang['ql_a2m']='Assigned to me';
$hesklang['ql_a2o']='Assigned to others';
$hesklang['ql_una']='Unassigned';
$hesklang['ql_due']='Due soon';
$hesklang['ql_ovr']='Overdue';
$hesklang['set_ds']='Show as &quot;due soon&quot;'; // Settings page (title of setting)
$hesklang['set_ds2']='days before due date';
$hesklang['not_aos']='Some open forms you have access to are not shown due to your filters.';
$hesklang['ntoverdue']='A form is overdue with owner:';
$hesklang['ovdcron']='for overdue notifications to work, your administrator must enable a cron job.';
$hesklang['instructions']='Instructions';
$hesklang['desc_overdue_ticket']='(Staff) Form overdue';
$hesklang['overdue_starting']='Starting overdue forms notification process';
$hesklang['overdue_sim']='Sending emails and updating forms is disabled in SIMULATION mode.';
$hesklang['overdue_ticket_count']='Found %s forms that are overdue.'; // %s = Number of tickets
$hesklang['overdue_finished']='Finished Overdue Forms. %s emails sent. %s emails failed to send.'; // %s = Successful emails, failed emails
$hesklang['admin_css']='Admin CSS';
$hesklang['admin_css2']='Load an extra custom style file for the admin panel';
$hesklang['noval_cert']='Do not validate server certificates';
$hesklang['chg_cat']='Click to change form category';
$hesklang['tlan']='Form language';
$hesklang['uue']='Two or more staff members have the same email address. We recommend setting a unique email address for each user.';
$hesklang['flood']='Flood limit';
$hesklang['e_flood']='Ooops, you already submitted a reply just recently. We stopped this request to prevent reply flooding.';
$hesklang['cookies']='Cookies';
$hesklang['ukey']='URL Access Key'; // Key required to access certain files (like cron jobs) via an URL
$hesklang['ukeyg']='Generate a random URL Access Key';
$hesklang['ukeym']='Error: to run this file via HTTP you must include your URL Access Key in the request. Example:';
$hesklang['ukeyw']='Error: wrong URL Access Key';

// Added or modified in HESK 3.3.0
$hesklang['mfa']='Multi-Factor Authentication (MFA)';
$hesklang['mfa_short']='MFA';
$hesklang['mfa_enabled_question']='MFA Enabled?';
$hesklang['mfa_required']='Require Multi-Factor Authentication';
$hesklang['mfa_manage_profile']='Manage MFA';
$hesklang['mfa_disabled']='Multi-Factor Authentication is disabled';
$hesklang['mfa_enabled']='Multi-Factor Authentication is Enabled (%s)'; // %s = MFA type
$hesklang['mfa_method_none']='None';
$hesklang['mfa_method_none_subtext']='Remove multi-factor authentication on your account.';
$hesklang['mfa_method_email']='Email';
$hesklang['mfa_method_email_subtext']='The helpdesk will send an email with a random login code to <strong>%s</strong> when logging in.'; // %s = User's email address
$hesklang['mfa_method_auth_app']='Authenticator App';
$hesklang['mfa_method_auth_app_short']='App';
$hesklang['mfa_method_auth_app_subtext']='Use a smartphone application, such as Authy or Google Authenticator, to generate a random login code when logging in.';
$hesklang['mfa_step_method']='Method';
$hesklang['mfa_step_verification']='Verification';
$hesklang['mfa_step_complete']='Complete';
$hesklang['mfa_introduction']='Multi-factor authentication improves account security by requiring you to verify your login using an additional verification method, such as email or an authenticator app (such as Authy or Google Authenticator).';
$hesklang['mfa_reset_warning']='You already have multi-factor authentication enabled. Completing this again will reset your multi-factor authentication device (if enabled).';
$hesklang['mfa_select_method_colon']='Select an authentication method:';
$hesklang['mfa_verification_header']='Verification - %s'; // %s = MFA type
$hesklang['mfa_verification_email_intro']='An email has been sent to <strong>%s</strong> containing a six-digit verification code. Enter the code you received via email below to continue.'; // %s = User's email address
$hesklang['mfa_verification_auth_app_intro']='&raquo; Step 1: Scan the image below with the multi-factor authentication app on your mobile device.';
$hesklang['mfa_verification_auth_app_cant_scan']='Not able to scan the image? Manually enter this code on your device: <b>%s</b>'; // %s = Secret code
$hesklang['mfa_verification_auth_app_enter_code']='&raquo; Step 2: Enter the 6-digit code displayed on your application to verify your device.';
$hesklang['mfa_verify']='Verify';
$hesklang['mfa_invalid_method']='Invalid multi-factor authentication method was received.';
$hesklang['mfa_invalid_verification_code']='The code that was entered is incorrect or expired.';
$hesklang['mfa_configured']='Multi-factor authentication has been enabled for your account!';
$hesklang['mfa_removed']='Multi-factor authentication has been disabled for your account!';
$hesklang['mfa_verification_needed']='Multi-factor authentication is enabled for this account.';
$hesklang['mfa_verification_needed_email']='Please enter the verification code that was sent to your email address.';
$hesklang['mfa_verification_needed_auth_app']='Please enter the code that is displayed on your authentication app.';
$hesklang['mfa_verification_code']='Verification code';
$hesklang['mfa_server_time_issue']='Your server time seems to be inaccurate: %s'; // %s = exception message
$hesklang['mfa_reset_to_default']='Reset multi-factor authentication';
$hesklang['mfa_reset_confirm']='Are you sure you wish to reset MFA for this user?';
$hesklang['mfa_reset_yes']='Reset'; // button title
$hesklang['mfa_reset']='Multi-Factor Authentication has been reset for the user';
$hesklang['desc_mfa_verification']='(Staff) Multi-Factor Authentication Code';
$hesklang['mfa_code']='Code:';
$hesklang['mfa_backup_codes_header']='SAVE YOUR BACKUP CODES!';
$hesklang['mfa_backup_codes_description']='Keep these backup codes somewhere safe but accessible. In case you lose access to your MFA device or email, you can enter one of the following backup codes to log in.<br><br><strong>Be sure to treat these backup codes like passwords. You will not be able to see these codes again!</strong>';
$hesklang['mfa_verify_another_way']='Verify your account another way';
$hesklang['mfa_verify_another_way_email']='Get a verification code at %s'; // %s = masked email address
$hesklang['mfa_verify_another_way_code']='Enter one of your 8-character backup codes';
$hesklang['mfa_verify_another_way_admin']='Contact your helpdesk administrator for help';
$hesklang['mfa_verify_another_way_reset']='Reset your multi-factor authentication by uploading a file to the server';
$hesklang['mfa_send_another_email']='Send another email';
$hesklang['mfa_sent']='An email with a new verification code was sent to your email address';
$hesklang['mfa_backup_code']='Backup Code';
$hesklang['mfa_backup_codes']='Backup Codes';
$hesklang['mfa_backup_codes_info']='Single-use codes to pass multi-factor verification when unable to access your email or authenticator app. Once you use a backup code to sign in, that code becomes inactive.';
$hesklang['mfa_backup_codes_num']='You can get a new set of 10 backup codes whenever you want. When you create a new set of codes, the old set automatically becomes inactive.';
$hesklang['mfa_backup_codes_num2']='Number of your active codes: %s'; // %s = number of active codes
$hesklang['mfa_invalid_backup_code']='The backup code that was entered is incorrect or has already been used.';
$hesklang['mfa_del_codes']='Delete my backup codes';
$hesklang['mfa_del_codes2']='All your backup codes have been deleted.';
$hesklang['mfa_new_codes']='Generate new backup codes';
$hesklang['mfa_new_codes2']='New backup codes have been generated';
$hesklang['old_php_version']='Error: Unsupported PHP version';
$hesklang['category_default_due_date']='Default Due Date';
$hesklang['category_change_default_due_date']='Set Default Due Date';
$hesklang['category_leave_blank_for_no_default_due_date']='(leave blank for no default due date)';
$hesklang['category_default_due_date_updated']='Default due date has been updated.';
$hesklang['email_formatting']='Email formatting';
$hesklang['email_formatting_html_and_plaintext']='HTML with plain text alternative from plain text template (default)';
$hesklang['email_formatting_html_and_plaintext_auto']='HTML with plain text alternative generated from HTML template';
$hesklang['email_formatting_html']='HTML only';
$hesklang['email_formatting_plaintext']='Plain text only';
$hesklang['email_formatting_note']='Your selection in %1$s &gt; %2$s &gt; %3$s is set to: <i>%4$s</i>'; // %1$s = Settings, %2$s = Email, %3$s = Email formatting, %3$4 = setting description
$hesklang['email_formatting_note0']='This means Hesk will ignore the HTML templates here.';
$hesklang['email_formatting_note1']='This means Hesk will ignore the plain text templates here.';
$hesklang['email_formatting_note2']='This means Hesk will generate plain text version of emails from your HTML templates and ignore the plain text templates here.';
$hesklang['etnu']='This email template is currently not used by Hesk based on your selection in %1$s &gt; %2$s &gt; %3$s'; // %1$s = Settings, %2$s = Email, %3$s = Email formatting
$hesklang['edit_category']='Edit Category';
$hesklang['create_category']='Create Category';
$hesklang['one_user_included']='1 user included';
$hesklang['one_user_excluded']='1 user excluded';
$hesklang['x_users_included']='%s users included'; // %s = Number of users
$hesklang['x_users_excluded']='%s users excluded'; // %s = Number of users
$hesklang['aa_cat']='Auto-assign forms in this category';
$hesklang['modify_autoassign_settings']='Modify auto-assign settings';
$hesklang['autoassign_on_all_users']='Yes, to any user with access to this category';
$hesklang['autoassign_on_select_users']='Yes, to specific users';
$hesklang['autoassign_off']='No, submit forms as unassigned';
$hesklang['autoassign_users']='Users to include/exclude in auto-assignment';
$hesklang['autoassign_selected_include']='Selected users should be <strong>included</strong> when auto-assigning forms in this category';
$hesklang['autoassign_selected_exclude']='Selected users should be <strong>excluded</strong> when auto-assigning forms in this category';
$hesklang['cat_edited']='Category %s has been successfully edited';
$hesklang['search_for_user']='Search for user';
$hesklang['email_sending']='Sending emails';
$hesklang['email_to_ticket']='Email to form';
$hesklang['email_to_ticket_info']='Converting emails to forms requires some server-side setup. For details, please see <a href="%s" target="_blank">this knowledgebase guide</a>.'; // %s = link to article
$hesklang['from_warning2']='Hesk is using a SMTP server to send email notifications. Your <strong>%1$s</strong> should be set to <strong>%2$s</strong>'; // %1$s = "From email" text, %2$s = email address
$hesklang['nofex']='Missing file extension';
$hesklang['block_ignore']='Email to form - Ignore emails and prevent loops';
$hesklang['block_noreply']='Do not reply';
$hesklang['block_noreply2']='Ignore emails sent from &quot;do not reply&quot; email addresses';
$hesklang['block_returned']='Returned';
$hesklang['block_returned2']='Ignore returned emails, such as delivery status notifications and automated replies';
$hesklang['block_duplicate']='Duplicates';
$hesklang['block_duplicate2']='Ignore emails with the same message sent within &quot;%s&quot; seconds'; // %s = "Timeframe"
$hesklang['loop_info']='emails received from the same email address within &quot;%s&quot; seconds';
$hesklang['thist21']='<li class="smaller">%s | overdue email notification sent</li>'; // %s = date
$hesklang['thist22']='<li class="smaller">%s | follow-up email sent</li>'; // %s = date
$hesklang['elevator_header']='Entering Secure Area';
$hesklang['elevator_intro']='You are about to enter a secure area.';
$hesklang['elevator_enter_password']='Please enter your password to continue.';
$hesklang['elevator_duration_setting_title']='Secure area duration';
$hesklang['desc_survey']='(Customer) Follow-up (survey) email'; // Email description
$hesklang['satisfaction']['tab']='Satisfaction';
$hesklang['satisfaction']['title']='Customer Satisfaction Survey';
$hesklang['satisfaction']['intro']='Send your customers a follow-up satisfaction survey to gather feedback about their experience with your help desk.';
$hesklang['satisfaction']['tab1']='Settings';
$hesklang['satisfaction']['tab2']='Opt-out';
$hesklang['satisfaction']['enable']='Enable follow-up emails:';
$hesklang['satisfaction']['enabled']='Customer Satisfaction Surveys are enabled.';
$hesklang['satisfaction']['disabled']='Customer Satisfaction Surveys are currently disabled.';
$hesklang['satisfaction']['url']='Survey URL address:';
$hesklang['satisfaction']['send']='Follow-up email delay:';
$hesklang['satisfaction']['at_least']='Wait at least';
$hesklang['satisfaction']['after']='after the form is resolved before sending the email';
$hesklang['satisfaction']['h1']='How to use this tool?';
$hesklang['satisfaction']['h2']='First, create a customer satisfaction survey in your favorite survey tool. If you are unsure what tool to use or what questions to ask, we have a <a href="%s" target="_blank">guide available here</a>.'; // %s = link to article
$hesklang['satisfaction']['h3']='When your survey is ready, enable follow-up emails using the form below. Hesk will process resolved forms with at least one staff reply once per hour and send your survey link to your customers.';
$hesklang['satisfaction']['e_url']='Enter a valid survey URL address. This is the URL your customers will be sent to.';
$hesklang['satisfaction']['as']='Enter a valid survey URL address. This is the URL your customers will be sent to.';
$hesklang['satisfaction']['oo1']='This page lists email addresses that follow-up emails will <b>not</b> be sent to.';
$hesklang['satisfaction']['oo2']='Your customers are able to opt-out from receiving survey emails by clicking a link in the email. Alternatively, you can manually add email addresses on this page.';
$hesklang['satisfaction']['ooe']='Email address to opt-out';
$hesklang['satisfaction']['ooe2']='Enter the email address you wish to opt-out from receiving survey emails.';
$hesklang['satisfaction']['ooe3']='This email address <i>%s</i> is already opted out from receiving survey emails.'; // %s will be replaced with email
$hesklang['satisfaction']['btn_oo']='Opt-out this email';
$hesklang['satisfaction']['oob']='Opted out by';
$hesklang['satisfaction']['no_oo']='No customer has opted out of receiving survey emails.';
$hesklang['satisfaction']['oor']='Remove';
$hesklang['satisfaction']['oor2']='Email removed from opt-out';
$hesklang['satisfaction']['oor3']='Confirm removal';
$hesklang['satisfaction']['oor4']='When removed from opt-out, this user will again receive follow-up emails.';
$hesklang['satisfaction']['optedout']='The email address <i>%s</i> was opted out of receiving survey emails.'; // %s will be replaced with email
$hesklang['satisfaction']['mit']='Missing or invalid survey ID';
$hesklang['satisfaction']['starting']='Starting customer satisfaction survey notification process';
$hesklang['satisfaction']['tc']='Found %s closed forms that did not have satisfaction survey sent.'; // %s = Number of tickets
$hesklang['satisfaction']['finished']='Finished Customer Satisfaction Survey. Emails sent: %1$s. Emails failed to send: %2$s. Forms without an email: %3$s. Forms with opt-out email: %4$s.'; // %1$s = successful emails, %2$s = failed emails, %3$s = number of tickets without an email, %4$s = number of tickets with opt-out users
$hesklang['satisfaction']['oo']='Ignoring, this customer does not wish to receive survey emails.';
$hesklang['satisfaction']['ne']='Ignoring, this form is without an email address';
$hesklang['satisfaction']['feat1']='Create your survey using any third-party tool, such as Google Forms';
$hesklang['satisfaction']['feat2']='set up your survey URL, preferences, and limitations inside this module';
$hesklang['satisfaction']['feat3']='when you resolve a form, Hesk will email your customer the link to the survey';
$hesklang['dfor']='Date format';
$hesklang['dtfor']='Date and Time';
$hesklang['cdfor']='Date select format';
$hesklang['custom']='Custom';
$hesklang['jsc_notice']='The date selection doesn\'t support PHP-style date formatting. Select one of the pre-configured options or click the %s icon below to see available display options.'; // %s = replaced by icon
$hesklang['lcf3']='Date only'; // Display: "Date only"
$hesklang['epdd']='Error parsing due_date parameter:';
$hesklang['edit_pass']='Edit password';
$hesklang['save_pass']='Save password';
$hesklang['cur_pass']='Current password';
$hesklang['cur_pass2']='You must provide your current password in order to change it.';
$hesklang['cur_pass3']='After a successful password update, you will be redirected to the login page, where you can log in with your new password.';
$hesklang['e_new_pass']='Please enter your new password';
$hesklang['pass_len']='The password must not exceed 64 characters';
$hesklang['pass_login']='Please log in again after changing your password';
$hesklang['bf_int']='You have been logged out due to too many failed verification attempts';
$hesklang['tst_cnt']='Number of emails your mail server will send to Hesk: %s'; // %s = number of emails
$hesklang['wrn_imap']='You have many unread emails in your mailbox (%1$s). Hesk will turn all these emails into forms.<br><br>You may want to mark existing emails as read before enabling %2$s or use a new email account for Hesk.'; // %1$s = number of emails, %2$s = IMAP or POP3 fetching
$hesklang['wrn_pop3']='You have many emails in your mailbox (%1$s). Hesk will turn all these emails into forms.<br><br>You may want to delete existing emails before enabling %2$s or use a new email account for Hesk.'; // %1$s = number of emails, %2$s = IMAP or POP3 fetching
$hesklang['search_due_date_specific']='Due on'; // Due on (date)
$hesklang['search_due_date_range']='Due in'; // Due in (X days)
$hesklang['attachment_add_files']='Add file';
$hesklang['attachment_max_exceeded']='This file will not be uploaded becuase you have already uploaded the maximum number of files allowed.';
$hesklang['attachment_viewer_message'] = "Drag files here or click the 'Add File' button below to select files to upload.";
$hesklang['attachment_invalid_type_message']='Sorry, but the file type you tried to upload is not allowed.';
$hesklang['attachment_upload_error']='An error occurred when trying to upload. Please try again later.';
$hesklang['attachment_too_large']='This attachment is larger than the max filesize permitted.';
$hesklang['attachment_cancel']='Cancel';
$hesklang['attachment_confirm_cancel']='Are you sure you want to cancel this upload?';
$hesklang['attachment_remove']='Remove attachment';
$hesklang['attachment_too_many_uploads']='Too many attachments have been uploaded from your location in a short period of time. Please try your request again later.';
$hesklang['sub_note']='Submit note';
$hesklang['can_view_users']='View all users (but not manage them)';
$hesklang['welcome1']='Hey there, you seem to be new here. Welcome!';
$hesklang['welcome2']='To help you get started, check out the %s.'; // %s = Hesk online Quick Start Guide (below)
$hesklang['welcome3']='Hesk online Quick Start Guide';
$hesklang['tmce1']='Use Ctrl+Right click to access spellchecker';
$hesklang['tmce2']='Hold the Control (Ctrl) key and right-click on the misspelled word to access the spellchecker.';
$hesklang['etfm']='One or more email templates are missing.<br><br>Make sure you upload all email template files inside these two folders:<br><br><i>/language/%s/emails</i><br><i>/language/%s/html_emails</i>';
$hesklang['etfw']='Some email templates are not writable.<br><br>
                    Make sure PHP has permission to write to all files inside these two folders:<br><br>
                    <i>/language/%s/emails</i><br>
                    <i>/language/%s/html_emails</i><br><br>
                    On Unix servers you might need to CHMOD email templates to 666 (rw-rw-rw-)';
$hesklang['desc_new_ticket_by_staff']='(Customer) New staff-submitted form';
$hesklang['mod_et_h']='You can modify email templates under %1$s &gt; %2$s'; // %1$s = Tools, %2$s = Email templates link
$hesklang['set_lang']='Set language to';
$hesklang['ouwa']='Only users with access to this category are listed below. To add staff members to this category, edit their permissions on the %s page'; // %s = Team
$hesklang['previous_tickets']='Previous forms';
$hesklang['no_previous']='No previous forms by %s'; // %s = email address
$hesklang['all_previous']='List all previous forms';
$hesklang['confirm_delete_ticket']='Are you sure you want to permanently delete this form?';
$hesklang['confirm_delete_reply']='Are you sure you want to permanently delete this reply?';
$hesklang['select_new_category']='Number of forms in this category: %s<br><br>Please select a new category to transfer these forms to:'; // %s = Number of tickets
$hesklang['deleting_user_with_tickets']='Number of forms assigned to this user: %1$s<br>Number of <b>open</b> forms assigned to this user: %2$s<br><br><b>Open</b> forms will be <b>unassigned</b> after deleting this user.'; // %1$s = total tickets, %2$s = open tickets
$hesklang['hlic']='HESK license';
$hesklang['hlic_free']='FREE';
$hesklang['hlic_buyl']='Buy a License';
$hesklang['hlic_paid']='Licensed';
$hesklang['antdemo']='Submitting forms from the admin panel has been disabled in the demo mode.<br><br>Please use the <a href="%s" target="_blank">public side</a> to submit a test form.';

// Added or modified in HESK 3.4.0
$hesklang['email_authentication_method'] = 'Authentication method';
$hesklang['email_authentication_method_username_password']='Basic (Username / Password)';
$hesklang['email_authentication_method_oauth']='OAuth';
$hesklang['email_authentication_method_oauth_disabled']='OAuth - No verified OAuth providers configured.';
$hesklang['email_authentication_method_oauth_link']='Manage OAuth providers'; // Links to "OAuth Providers" tools page
$hesklang['email_oauth_auth_url']='Authorization Endpoint URL';
$hesklang['email_oauth_token_url']='Token Endpoint URL';
$hesklang['email_oauth_client_id']='Client ID';
$hesklang['email_oauth_client_secret']='Client Secret';
$hesklang['email_oauth_scope']='Scope';
$hesklang['oauth_error_invalid_state']='OAuth state does not match the state sent to OAuth provider.';
$hesklang['oauth_error_unknown']='An unknown error occurred when attempting to save OAuth tokens.';
$hesklang['oauth_error_no_token']='Access token missing in the JSON response.';
$hesklang['oauth_error_retrieve']='Unable to retrieve an access token. Please confirm your OAuth Provider settings and re-save them to acquire a new token.';
$hesklang['email_oauth_provider']='OAuth Provider';
$hesklang['email_oauth_providers']='OAuth Providers';
$hesklang['email_oauth_provider_guide']='Before using OAuth, you must register an OAuth Provider. For details, please see <a href="%s" target="_blank">this knowledgebase guide</a>.'; // %s = link to article
$hesklang['email_oauth_provider_uri']='Your OAuth Redirect URI for Hesk is:<br><i>%s</i>'; // %s = URL of the oauth_providers.php file
$hesklang['email_oauth_providers_intro']='Use this tool to add OAuth providers to your help desk';
$hesklang['email_oauth_provider_name']='Name'; // OAuth provider name
$hesklang['email_oauth_new_provider']='New Provider';
$hesklang['email_oauth_edit_provider']='Edit Provider';
$hesklang['email_oauth_provider_being_used_for']='Being Used For';
$hesklang['email_oauth_providers_none']='No OAuth providers saved. You can add them by clicking "New Provider" above.';
$hesklang['email_oauth_provider_cannot_be_deleted']='This provider cannot be removed because it is being used by the help desk.';
$hesklang['email_oauth_confirm_delete_provider']='Are you sure you want to delete this OAuth provider?';
$hesklang['oauth_provider_saved']='OAuth provider has been saved';
$hesklang['oauth_provider_use']='You can now select this provider in %s &gt; %s'; // %s = Settings, %s = Email
$hesklang['oauth_provider_err_name']='Enter the provider name';
$hesklang['oauth_provider_err_auth_url']='Enter a valid authorization URL';
$hesklang['oauth_provider_err_token_url']='Enter a valid token URL';
$hesklang['oauth_provider_err_client_id']='Enter the client ID';
$hesklang['oauth_provider_err_client_secret']='Enter the client secret';
$hesklang['oauth_provider_err_scope']='Enter the scope';
$hesklang['oauth_provider_deleted']='OAuth provider deleted';
$hesklang['oauth_provider_not_found']='This OAuth provider does not exist';
$hesklang['oauth_provider_verified']='Verified';
$hesklang['oauth_provider_click_to_verify']='Click to verify';
$hesklang['can_due_date']='Can set due date'; // Permission to set and modify due date
$hesklang['can_due_date_e']='You do not have permission to set due dates';

// DO NOT CHANGE BELOW
if (!defined('IN_SCRIPT')) die('PHP syntax OK!');
