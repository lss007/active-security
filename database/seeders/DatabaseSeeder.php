<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(PageCategorySeeder::class);
      
        $this->call(HomeBannerSeeder::class);
        $this->call(HomeClientLogoSeeder::class);
        $this->call(HomeSectionSliderSeeder::class);
        $this->call(HomeSectionOneSeeder::class);
        $this->call(HomeSectionTwoSeeder::class);
        $this->call(HomeSectionFiveSeeder::class);

        $this->call(AllPagesBannerSeeder::class);
        $this->call(FooterContactAddressSeeder::class);
        $this->call(ContactSectionSeeder::class);

        $this->call(FooterLogoSeeder::class);

        $this->call(ServicesPageSectionSeeder::class);
        $this->call(ServicesPageBannerSeeder::class);
        $this->call(ServiceLastSectionSeeder::class);

        $this->call(JobSectionSeeder::class);
        
        $this->call(CompanySectionOneSeeder::class);
        $this->call(CompanySectionTwoSeeder::class);

        $this->call(SociaCategorySeeder::class);
        $this->call(SocialLinksSeeder::class);
        $this->call(PrivacySettingSeeder::class);

        $this->call(PrivacyPageTextSeeder::class);

        $this->call(AgbpageSeeder::class);




        


        



        


        

        



        
        

        


        



        


        




        


     



        // \App\Models\User::factory(10)->create();
  
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
