<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * youtube settings.
 *
 * @package   atto_youtube
 * @copyright COPYRIGHTINFO
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();

$ADMIN->add('editoratto', new admin_category('atto_youtube', new lang_string('pluginname', 'atto_youtube')));

$settings = new admin_settingpage('atto_youtube_settings', new lang_string('settings', 'atto_youtube'));



if ($ADMIN->fulltree) {

// Section for setting tab visibility
$settings->add(new admin_setting_heading('visibletabsheading', '', get_string('visibletabsheading', 'atto_youtube')));
	
// Allow uploads
$settings->add(new admin_setting_configcheckbox('atto_youtube/allow_uploads',
                   new lang_string('allowuploads', 'atto_youtube'),
                   new lang_string('allowuploadsdetails', 'atto_youtube'), 1));
                   
// Allow webcam
$settings->add(new admin_setting_configcheckbox('atto_youtube/allow_webcam',
                   new lang_string('allowwebcam', 'atto_youtube'),
                   new lang_string('allowwebcamdetails', 'atto_youtube'), 1));

// Allow manual
$settings->add(new admin_setting_configcheckbox('atto_youtube/allow_manual',
                   new lang_string('allowmanual', 'atto_youtube'),
                   new lang_string('allowmanualdetails', 'atto_youtube'), 1));
				   
// Section for authentication keys and settings
$settings->add(new admin_setting_heading('keysauthheading', '', get_string('keysauthheading', 'atto_youtube')));

//The authentication type, master user or student by student
$authoptions = array('byuser' => new lang_string('byuser', 'atto_youtube'),
			'bymaster' => new lang_string('bymaster', 'atto_youtube'));
$settings->add(new admin_setting_configselect('atto_youtube/authtype', 
				new lang_string('authtype', 'atto_youtube'),  
				new lang_string('authtypedetails', 'atto_youtube'), 'bymaster', $authoptions));

// Developers Key			   
$settings->add(new admin_setting_configtext('atto_youtube/devkey',
                        new lang_string('youtubedevkey', 'atto_youtube'),
                        new lang_string('youtubedevkeydetails', 'atto_youtube'), '')); 

$settings->add(new admin_setting_configtext('atto_youtube/youtube_masteruser',
                        new lang_string('youtubemasteruser', 'atto_youtube'),
                        new lang_string('youtubemasteruserdetails', 'atto_youtube'), ''));
						
$settings->add(new admin_setting_configpasswordunmask('atto_youtube/youtube_masterpass',
                        new lang_string('youtubemasterpass', 'atto_youtube'),
                        new lang_string('youtubemasterpassdetails', 'atto_youtube'), ''));



$settings->add(new admin_setting_configtext('atto_youtube/youtube_clientid',
                        new lang_string('youtubeclientid', 'atto_youtube'),
                        new lang_string('youtubeclientiddetails', 'atto_youtube'), ''));
						
$settings->add(new admin_setting_configtext('atto_youtube/youtube_secret',
                        new lang_string('youtubesecret', 'atto_youtube'),
                        new lang_string('youtubesecretdetails', 'atto_youtube'), ''));
	
	
	// Video Default Settings
	$settings->add(new admin_setting_heading('videoinfoheading', '', get_string('videoinfoheading', 'atto_youtube')));
	$privacyoptions = array('unlisted' => new lang_string('unlisted', 'atto_youtube'),
		'public' => new lang_string('public', 'atto_youtube'),
		'private' => new lang_string('private', 'atto_youtube'));
	$settings->add(new admin_setting_configselect('atto_youtube/videoprivacy',
			   get_string('videoprivacy', 'atto_youtube'),
			   get_string('videoprivacydetails', 'atto_youtube'), 'unlisted',$privacyoptions));
			   
	//Category settings
	$categoryoptions = array('Education' => new lang_string('cat_education', 'atto_youtube'),
					'Animals' => new lang_string('cat_animals', 'atto_youtube'),
					'Autos' => new lang_string('cat_autos', 'atto_youtube'),
					'Comedy' => new lang_string('cat_comedy', 'atto_youtube'),
					'Film' => new lang_string('cat_film', 'atto_youtube'),
					'Games' => new lang_string('cat_games', 'atto_youtube'),
					'Howto' => new lang_string('cat_howto', 'atto_youtube'),
					'Music' => new lang_string('cat_music', 'atto_youtube'),
					'News' => new lang_string('cat_news', 'atto_youtube'),	
					'Nonprofit' => new lang_string('cat_nonprofit', 'atto_youtube'),
					'People' => new lang_string('cat_people', 'atto_youtube'),
					'Tech' => new lang_string('cat_tech', 'atto_youtube'),
					'Sports' => new lang_string('cat_sports', 'atto_youtube'),
					'Travel' => new lang_string('cat_travel', 'atto_youtube'));
					
	$settings->add(new admin_setting_configselect('atto_youtube/videocategory',
		   get_string('videocategory', 'atto_youtube'),
		   get_string('videocategorydetails', 'atto_youtube'), 'Education',$categoryoptions));
		   
	//Comment on YouTube Ok
	$settings->add(new admin_setting_configcheckbox('atto_youtube/allow_ytcomment',
                   new lang_string('allowytcomment', 'atto_youtube'),
                   new lang_string('allowytcommentdetails', 'atto_youtube'), 0));
	//Rate on YouTube OK			   
	$settings->add(new admin_setting_configcheckbox('atto_youtube/allow_ytrate',
                   new lang_string('allowytrate', 'atto_youtube'),
                   new lang_string('allowytratedetails', 'atto_youtube'), 0));
	//Video Respond on YouTube OK			   
	$settings->add(new admin_setting_configcheckbox('atto_youtube/allow_ytrespond',
                   new lang_string('allowytrespond', 'atto_youtube'),
                   new lang_string('allowytresponddetails', 'atto_youtube'), 0));
}
