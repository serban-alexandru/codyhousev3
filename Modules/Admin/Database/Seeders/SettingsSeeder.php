<?php

namespace Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use \DB;
use Modules\Admin\Entities\Settings;

class SettingsSeeder extends Seeder
{
    private $table = 'settings';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $dateNow = now();

        $records = [
            [
                'key'           => 'logo_title',
                'value'         => 'LOGO'
            ],
            [
                'key'           => 'logo_svg',
                'value'         => '<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"><title>telegram</title><g fill="#000000"><path d="M24.39 3.04a0.51 0.51 0 0 0-0.35-0.38 1.79 1.79 0 0 0-0.94 0.07s-20.87 7.67-22.15 8.36c-0.3 0.16-0.34 0.28-0.39 0.41-0.21 0.59 0.44 0.86 0.44 0.86l5.4 1.76 2.58 7.01s0.28 0.68 0.68 0.68c0.17 0 0.55-0.18 1.1-0.73a46.84 46.84 0 0 1 2.84-2.6c1.86 1.28 3.86 2.7 4.72 3.44a1.5 1.5 0 0 0 1.09 0.42c0.82-0.03 1.05-0.93 1.05-0.93s3.82-15.37 3.95-17.43c0.01-0.2 0.03-0.33 0.03-0.47a1.74 1.74 0 0 0-0.05-0.47z m-17.07 10.65c2.7-1.7 11.78-7.42 12.36-7.63 0.1-0.03 0.18 0 0.16 0.07-0.26 0.9-9.89 9.47-9.93 9.5a0.22 0.22 0 0 0-0.07 0.16l-0.38 3.85z" fill="#000000"></path></g></svg>'
            ],
            [
                'key'           => 'page_title',
                'value'         => 'Site Title'
            ],
            [
                'key'           => 'meta_title',
                'value'         => 'Meta Title'
            ],
            [
                'key'           => 'favicon',
                'value'         => 'assets/img/favicon.svg'
            ],
            [
                'key'           => 'post_page_title',
                'value'         => '[posttitle] | [sitetitle]'
            ],
            [
                'key'           => 'post_meta_title',
                'value'         => '[posttitle] | [sitetitle]'
            ],
            [
                'key'           => 'tag_page_title',
                'value'         => '[tagtitle] | [sitetitle]'
            ],
            [
                'key'           => 'tag_meta_title',
                'value'         => '[tagtitle] | [sitetitle]'
            ],
            [
                'key'           => 'profile_page_title',
                'value'         => '[username] | [sitetitle]'
            ],
            [
                'key'           => 'profile_meta_title',
                'value'         => '[username] | [sitetitle]'
            ],
            [
                'key'           => 'font_primary',
                'value'         => 'Roboto Slab'
            ],
            [
                'key'           => 'font_secondary',
                'value'         => 'Inter'
            ],
            [
                'key'           => 'font_logo',
                'value'         => 'Libre Caslon Display'
            ],
            [
                'key'           => 'tracker_script',
                'value'         => ''
            ],
            [
                'key'           => 'reg_en_fullname',
                'value'         => 'on'
            ],
            [
                'key'           => 'reg_en_verify_email',
                'value'         => 'on'
            ],
            [
                'key'           => 'notify_from_email',
                'value'         => ''
            ],
            [
                'key'           => 'template_email_confirm',
                'value'         => '<p>Please click the button below to verify your email address.</p><p><a href="{{URL}}">Verify Email Address</a></p><p>If you did not create an account, no further action is required.</p>'
            ],
            [
                'key'           => 'template_forgot_password',
                'value'         => '<p>You are receiving this email because we received a password reset request for your account.</p><p><a href="{{URL}}">Reset Password</a></p><p>This password reset link will expire in 1 hour.</p><p>If you did not request a password rest, no further action is required.</p>'
            ],
            [
                'key'           => 'app_template',
                'value'         => 'default'
            ],
            [
                'key'           => 'blog_template',
                'value'         => 'default'
            ],
            [
                'key'           => 'post_template',
                'value'         => 'default'
            ],
            [
                'key'           => 'page_template',
                'value'         => 'default'
            ],
            [
                'key'           => 'profile_template',
                'value'         => 'default'
            ],
            [
                'key'           => 'tag_template',
                'value'         => 'default'
            ],
        ];

		foreach ($records as $record) {
            $record['created_at'] = $dateNow;
            $record['updated_at'] = $dateNow;

            $update = ['key' => $record['key']];
            Settings::updateOrCreate($update, $record);
        }
    }
}
