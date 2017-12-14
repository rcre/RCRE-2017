# RESOURCE CHANGE LOG & HISTORY

This theme is meant to make development easier & take
advantage of modern web development & design techniques.

Author: Patrick Hanus

## Vesioning

> 0.0.1 - Quick fixes and emergency problems (~ As Requested)

> 0.1.0 - Major fixes and adding minor features (~ Weekly)

> 1.0.0 - Major Enhancements and Features are added (~ Monthly)

*******************************************************************

*1.6.2*

- Changed some links to resolve a favicon misdirect
- Added WP support from the title tagged
- Added a feature that allows for async load for JS
- Replaced apostrophes with ASCII symbols

*1.6.1*

- Fixed some links to icons in the header
- Fixed a problem where “read time” was showing up with no #
- Added a pdf download for Jobs in the header
- Added jobs to the main careers page and changed the order
- Created a page template for a new job
- Fixed verbiage on employee page for past clients

*1.6.0*

- Added styles for dropdown mobile menu
- Added JS for new mobile menu
- Added description to careers page resume uploader
- Fixed header background to span the whole screen
- Deleted unnecessary styles in 481up scss
- Re-centered callout text
- Deleted Mobile menu slide function
- Added the “made with heart” in the footer

*1.5.1*

- Removed listings page map
- Changed the layout a bit for the listings page
- Added the header darken on the listings page and adjusted padding
- Converted client lists to a bulleted list
- Added a line of text on the  bottom of the 
- Added shadow to case study icon
- Added an icon to the “4 mins to read” section

*1.5.0*

- Moved all footer scripts from the footer to the scripts.js file
- Moved the timestamp function from the header to the scripts.js file
- Changed the order of the scripts that are enqued, parallax first
- Added if statements to the JS to avoid errors if the ID doesn’t exist
- Updated the Error 404 header to match the main header
- Changed the address url to be white on listing pages
- Added padding the employee page header
- Added a grid for case studies, fixing a layout issue on the employee pg
- Removed the drop shadow on dark headers
- Removed the contact form on the footer of team pages
- fixed a problem where white margins were showing up on contact forms
- Changed the wording on the blog service card on the homepage.
- Case Studies now show up on the correct/relevant pages
- Added CSS Grid functionality to the Case Study archive page
- Increased number of Wernke Team closed listings

*1.40*/

- fixed some padding on the front page
- Moved all our grid items to css grid, rather than floats
- updated things to the new RESOURCE logo, favicon included
- Changed the width of the header callout
- Added a read-time icon on the front-end
- Added a helper class for adding header margins back in
- Added a hover on our service grid and took out extra links
- Cleaned up some extraneous styles
- Added block quote styles
- Added upload resume feature to the careers page
- Increased Wernke Listings from 100 to 150
- Cleaned up the look of blog posts and research posts
- fixed a button for downloading the research report

*1.3.3*

- Fixed some codekit config stuff
- Fixed some icons that were not showing up on the career page

*1.3.2*

- Home header buttons had the wrong class so was missing styles
- Changed the header height to be auto, becuase I don't think it should be "vh"

*1.3.1*

- fixed links to icons
- renamed some icons to be consistent
- added new icons for careers
- cleaned up button classes, and fixed in html accordingly
- tested and added to the new contact form, for landing pages
- Cleaned up header.php and split up the custom headers again
- Added the button to the blog header
- Added section on careers page, showing things we offer
- Fixed header layouts throughout
- Fixed a layout issue in the footer social icons
- Added social icons to employee profile page
- Deleted some extraneous style classes from case-study partial
- Fixed layout of team pages
- Added a shadow to all H1 tags
- Added google map feature to listing page
- Changed some of the case study things

*1.3.0*

- Add titles to a tags for when people hover over links
- Created a partial for the careers page grid
- Fixed the problem where text was aligning right on the contact form
- Changed the wernke “closed” section from 50 listings to 100 listings
- Fixed a setting where links were showing up on print verions of the site
- Reset global header margins and paddings, becuase they were all over the place
- Fixed a problem with how the UVP styles were showing up
- Fixed the mobile overflow of the "Our Clients" section
- Took out the requirement for phone pattern, it wasn't working on the mobile version

*1.1.1*

- Converted salesforce oid to JS
- Added the form ID to the contact form
- Changed some layout things on the listing view
- Made some tweaks to the way listings are output inside the divs
- Deleted the “hentry” spec
- Created a new template for team pages
- Disabled “Our Clients” bar on Mobile
- Fixed a bug where case study icon border was collapsing

*1.1.0*

* New feature where wernke’s closed listings are sorted by year!

- Fixed alignment and layout for the social buttons in the footer
- Removed unused code for Inserting Itemprop into li items in functions.php
- Fixed tab index problems in the contact form
- Added Contact form header back in
- Fixed issue where team was not sorting alphabetically
- Added tag buttons to plain text property type labels
- Changed the layout sizing for property cards
- Added broker title to author partial
- Added profile link to case study author title
- Resolved Research report download button should open in a new tab, not the current one

*1.0.9*

- Removed if/else from submit enable JS
- Removed debug mode from contact form
- Changed Select values back to white

Also, Patrick is stupid.

*1.0.8*

- Removed Cleabit Integration
- Fixed Styles on footer social links
- Created a new contact form that actually validate reCaptcha correctly
- Added some new fields to the main contact form
- Bumped up the size of UVP text on desktop

*1.0.7*

- Deleted residual search button feature
- Fixed UVP callout
- Fixed a problem on page-team.php where I deleted the <?php endwhile; endif; ?> accidentally 

*1.0.6*

- Added Twitter Conversion JS
- Fixed a problem on listings where the Property Description was white
- Deleted some residual snazzy maps code
- Fixed the duplication on the Teams pages
- Consolidated the UVP section into a partial
- Fixed a problem where pdfs weren’t downloading in the header
- Fixed a JS error that was thrown due to a timer/timestamp

*1.0.5*

- consolidated logos and icons into folder
- deleted tile pngs
- removed Case Studies from Multifamily Page
- Enabled more than 50 Closed listings on the Wernke Team’s page
- Fixed address on the home page
- Added sale price to the listing post view

*1.0.4*

- Add PHP server side verification for the Contact form
- Added Clearbit Script for User visiting tracking w/ Google Analytics
- Removed Snazzy Maps (will be added in version 2.0)
- Fixed and added some of the JSON for structured data
- Fixed labels for schema on individual pages
- Added Social Media in the footer
- Created a page for the Marketing Team

*1.0.3*

- comment out search form (For now)
- Added Snazzy Maps Bower components
- Added Snazzy maps components in header
- Added conditional code for listing header to show SF or Units
- Increased size of the 
- Fixed the pending section on the Wernke’s Website
- Increased font size on h4 for listings
- Added a new post format for closed listings
- Fixed broker’s phone -> cell phone
- fixed the format of client logos for broker profiles
- added a class for “.cta-underline-gray”

*1.0.2*

- Added Bing Webmaster tools verification
- Changed some default http://schema.org/ declarations
- Removed MailChimp JS verification
- Converted ReCaptcha JS to async
- Added Google Analytics
- Set up CSS image sprite for homepage logos
- Fixed bad link to modernizr
- Fixed a problem with with downloadable PDF
- Removed salesforce recaptcha stuff
- Fixed the problem where the home page was showing up weird on smaller screens
- Fixed a problem where case studies were showing up weird on the employee page

*1.0.1*

- Fixed some typos
- Layout changes
- Better readibility in 
- tweaks for layout changes, as things get bigger
- font size changes
- added bottom margin to the broker profile pic

*1.0.0*

- First version of the new RESOURCE website