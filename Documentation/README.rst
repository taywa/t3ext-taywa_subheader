======================================
Subheader field for text,textpic,html,image in BE
======================================

What does it do?
========================

Show subheader field in BE for Ctype: text,textpic,image (css_styled_content) and textmedia (fluid_styled_content) and html (both).



Before TYPO3 8 this was done using extTables.php, which is depreciated in TYPO3 8.

More in German:

See here: http://www.netzkompetenz.ch/typo3/typo3-7-lts/typo3-7-lts-subheader-bei-den-contenttypen-text-text-mit-bild-und-bilder-hinzufuegen/

What does it not do?
========================

This only makes subheader field visible in TYPO3 Backend, it does not add some rendering. Rendering is handled via css_styled_content

Link to Extension Repository
========================
https://typo3.org/extensions/repository/view/taywa_subheader


History
========================
v 0.0.2: added CType *textmedia*


Tested in YPO3 7 LTS only
========================
I tested this in TYPO3 7 LTS, not in  TYPO3 8, but I should work.




Tools
================================================

zip this extension for repro

    zip -r ../taywa_subheader_0.0.2.zip *
