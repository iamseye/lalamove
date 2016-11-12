<?php

use Illuminate\Database\Seeder;

class homeInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // lang: hk-en role:personal
        DB::table('home_infos')->insert([
            'intro_title' => 'Lalamove helps you Deliver Faster!',
            'intro' => 'Lalamove gives you easy access to quality van, 5.5 tons truck and lorry service anywhere, anytime. Through our mobile and web app, you can instantly find a nearby van or truck for your delivery needs. With over 10,000 professional drivers in Hong Kong, delivery is now efficient, professional, and speedy!',
            'video_path'=>'video/intro_en.mp4',
            'step_title'=>'How to Place an Order',
            'step1'=>'Plan your route <br>- supports multiple locations',
            'step2'=>'Choose Your <br>Service Options',
            'step3'=>'Confirm Details <br>- Your Driver is on the Way',
            'features_title'=>'Lalamove Mobile app and service features',
            'feature1_title'=>'High Quality and Professional Drivers',
            'feature2_title'=>'Pricing - A very reasonable van fee',
            'feature3_title'=>'GPS and Order Tracking',
            'feature4_title'=>'Mark Your Favourite Drivers',
            'feature1_content'=>'Driver Ratings ensure that the best available drivers get your order',
            'feature2_content'=>'What you see is what you pay! All information is already been shown on mobile app!',
            'feature3_content'=>'Follow your driver in the GPS real time map and allow to share details with your friends',
            'feature4_content'=>'Like a driver? Add the driver to your fleet, and he/she gets priority on your next order',
            'homes_id'=>1,

        ]);

        // lang: hk-chi role:personal
        DB::table('home_infos')->insert([
            'intro_title' => '用手機App叫貨Van  Lalamove 是你的即時貨運拍檔',
            'intro' => 'Lalamove 手機App 是你尋找即時Van仔和5.5噸車的最佳Call車平台。Lalamove 手機應用程式一星期7天​​24小時全年運作，隨身一部智能手機，即時聯繫全港九新界超過10000位專業司機，GPS定位功能隨時隨地為你配對最近客貨車，為你解決即時送貨需要。',
            'video_path'=>'video/intro_chi.mp4',
            'step_title'=>'三個落柯打步驟 簡單方便易用',
            'step1'=>'選擇路線<br>(可選多個中途站)',
            'step2'=>'揀選特別需要<br>(如乘載寵物)',
            'step3'=>'確認總費用及明細帳單適合您需要的司機馬上到埗',
            'features_title'=>'特點 - Lalamove 手機App特色',
            'feature1_title'=>'優質司機評分制度',
            'feature2_title'=>'貨車收費 價格一清二楚',
            'feature3_title'=>'GPS定位 實時追蹤',
            'feature4_title'=>'自訂我的車隊',
            'feature1_content'=>'自動為您優先配對評分卓越的司機。您的評分是推動司機做得更好的動力。',
            'feature2_content'=>'手機App擁有一系列收費配對，路價價格清晰，免除爭議，落柯打毋須額外費用。',
            'feature3_content'=>'即時讓您知道及分享司機所在位置',
            'feature4_content'=>'立刻將最喜愛司機加入自己的車隊，讓他/她優先處理您的柯打',
            'homes_id'=>2,
        ]);

        // lang: hk-chi role:bussiness
        DB::table('home_infos')->insert([
            'intro_title' => '你是否正在尋找更快更划算的急件快遞服務？',
            'intro' => 'Lalamove啦啦快送可以為您提供24小時營運的1小時專件快遞 立即向我們索取免費試用及企業優惠方案吧！',
            'video_path'=>'video/intro_chi.mp4',
            'step_title'=>'商務合作 - 專屬企業解決方案',
            'step1'=>'API <br>-與我們聯絡，我們的API分配流程式可與你的公司系統連結',
            'step2'=>'Kiosk <br>-為你的商舖客戶提供自助而方便的Call車服務台',
            'step3'=>'企業合作計劃<br>我們會根據你每月的運送使用量度身訂做一套商務方案，讓你擁有更多優勢！想了解更多？請聯絡我們！',
            'features_title'=>'服務特點',
            'feature1_title'=>'運輸類型',
            'feature2_title'=>'價格',
            'feature3_title'=>'使用記錄',
            'feature4_title'=>'我的司機團隊',
            'feature1_content'=>'電單車、貨車及重型車同時為你提供以配合多件或單件貨物運送',
            'feature2_content'=>'公開透明的即時價格',
            'feature3_content'=>'用戶可以使用任何電子數碼產品查閱詳細柯打資料與使用記錄(智能手機、平版電話及桌上及手提電腦)',
            'feature4_content'=>'建立「我的車隊」，選擇值得你信賴的司機團隊',
            'feature_content'=>'Lalamove 為你提供方便容易的運送方案！透過你的智能手機或電腦提供取貨和送貨地點資料，我們就可以為你提供一站式物流服務！有急件？與Lalamove 聯繫吧！我們為不同印刷商運送大數量市場推廣物資、中西式節日活動禮物運送和派對籌備、餐廳及酒店多目的外送食物流程等。而且，愈來愈多電子商務企業公司紛紛聯繫Lalamove了解有關API系統連結物流配套計劃，另外，實體商店亦選擇建立店內顧客自助Call車服務。',
            'homes_id'=>3,
        ]);

        // lang: hk-en role:bussiness
        DB::table('home_infos')->insert([
            'intro_title' => 'Professional On-demand Delivery in Hong Kong',
            'intro' => 'Send your goods across Hong Kong - Lalamove handles your same day and instant deliveries - <strong>try it now</strong> or contact us for business rates!',
            'video_path'=>'video/intro_en.mp4',
            'step_title'=>'Exclusive business solutions',
            'step1'=>'API <br>- integrate your online shop or platform with our delivery services',
            'step2'=>'Kiosk <br>- customize your delivery, enjoy the ease and convenience of a kiosk',
            'step3'=>'Corporate packages<br>- we offer advantageous packages based on monthly volume, contact us for details',
            'features_title'=>'Features',
            'feature1_title'=>'Vehicles',
            'feature2_title'=>'Pricing',
            'feature3_title'=>'Records',
            'feature4_title'=>'My Drivers',
            'feature1_content'=>'Vans and Lorries available for multiple items and odd sized delivery',
            'feature2_content'=>'Transparent & immediate pricing',
            'feature3_content'=>'Detailed order history available for easy tracking with any device (smartphone, tablet, computer)',
            'feature4_content'=>'Build your own fleet,select your own drivers',
            'feature_content'=>'Lalamove makes your express deliveries easy! We are already working with Hong Kong corporates, like property and house moving agency, food and catering, wedding and fashion, private party and floral shops, wine and spirit, storage and trading, architecture and construction, public event and camping, etc. Find out more about professional delivery for <strong>event companies  organizing corporate training and workshops</strong>, providing personalized van delivery service. <strong>Learn more about how other companies improve their performance with our instant delivery services.</strong> Contact us to integrate our distribution API or install a self-delivery kiosk in your store.',
            'homes_id'=>4,
        ]);

        // lang: hk-en role:drivers
        DB::table('home_infos')->insert([
            'intro_title' => 'Are you seeking for more job orders to earn extra income?',
            'intro' => '3 easy steps to be your own boss!',
            'step_title'=>'3 easy steps to accept orders and make money',
            'step1'=>'Choose your favorite order',
            'step2'=>'Call your customer<br>to reconfirm price and details',
            'step3'=>'Pick more orders, become a star driver and get extra rewards',
            'features_title'=>'Features',
            'feature1_title'=>'Additional income',
            'feature2_title'=>'Our service is absolutely free of charge.',
            'feature3_title'=>'Lalamove (EasyVan) is a groundbreaking platform.',
            'feature1_content'=>'More orders, more income',
            'feature2_content'=>'There is no monthly fee or commission required. You get 100% of what you’ve worked for!',
            'feature3_content'=>'For drivers to get orders in a complete transparent and efficient way. Get more jobs, anywhere, anytime.',
            'Customize_title'=>'Customize your vehicle',
            'Customize_content'=>'We offer you the opportunity to have a unique van wrap! Get your Lalamove van today and contact our team to check our catalogue and get your van customized for free! Lalamove is one of the largest logistics platforms in Asia. Join us and get benefits of the unique opportunity!',
            'homes_id'=>5,
        ]);

        // lang: hk-chi role:drivers
        DB::table('home_infos')->insert([
            'intro_title' => '想快人一步，輕鬆接單，賺取額外收入嗎？',
            'intro' => '輕鬆接單三步驟，做自己的老闆',
            'step_title'=>'三個步驟，做自己的老闆',
            'step1'=>'接下客戶訂單。',
            'step2'=>'了解訂單客戶所有需求，接受價格後接下訂單。',
            'step3'=>'訂單將放入接單紀錄中，隨時確認訂單狀況。',
            'features_title'=>'特點',
            'feature1_title'=>'額外生意及收入',
            'feature2_title'=>'完全免費',
            'feature3_title'=>'革命性配對平台',
            'feature1_content'=>'接單賺取更多收入',
            'feature2_content'=>'不需負擔任何費用',
            'feature3_content'=>'讓司機隨時隨地接柯打，保證公平,公開,公正。',
            'Customize_title'=>'為你提供專屬貨Van車身貼紙計劃',
            'Customize_content'=>'想要您的貨Van與別不同，吸引更多的目光，接到更多的單嗎？ 即刻聯絡我們了解更多Lalamove 專屬貨Van車身貼紙計劃。',
            'homes_id'=>6,
        ]);

    }
}
