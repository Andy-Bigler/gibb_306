<?php

use Illuminate\Database\Seeder;
use App\Faq;

class FaqTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faq::create([
           'question' => 'How do I redeem gift cards',
           'answer' => 'If you already have a Netflix account, you can also enter this code on your Account page. The balance of your gift card will be added to your account and your next payment will be taken from the gift card balance.',
            'user_id' => 1
        ]);

        Faq::create([
            'question' => "Why can't I redeem my gift card?",
            'answer' => 'If you are unable to redeem a Netflix Gift Card, use this article to resolve the issue.',
            'user_id' => 2
        ]);

        Faq::create([
            'question' => 'Can I use more than one gift card on my account?',
            'answer' => 'Yes, you can buy more than one gift card to use on your account. You can enter the gift cards at netflix.com/redeem and your balance will increase with each gift card you add. Check your Billing Details page to see your available balance.',
            'user_id' => 4
        ]);

        Faq::create([
            'question' => 'Can I redeem a Netflix Gift Card on my account if I pay through iTunes, Google Play, or another partner?',
            'answer' => 'You cannot currently redeem a Netflix Gift Card on an account that is being billed through iTunes or Google Play; you can redeem a Netflix Gift Card if you pay through another partner. If you currently pay through iTunes or Google Play but would like to use a Netflix Gift Card, you will need to cancel your Netflix account and restart it using your gift card.',
            'user_id' => 5
        ]);

        Faq::create([
            'question' => 'Do I have to enter a credit card in order to use a Netflix Gift Card on my account?',
            'answer' => 'No - Just go to netflix.com/redeem, scratch the foil off the back of your card gently with a coin, and enter your PIN. If you already have an account, follow the instructions to add this gift to your account. If you are new to Netflix, it\'s easy to sign up. This gift card, an email address, and password are all you’ll need to start watching movies and TV shows.',
            'user_id' => 3
        ]);

        Faq::create([
            'question' => 'What happens when my gift balance isn’t enough to pay for a full month?',
            'answer' => 'You will receive service for as long as your gift card balance lasts. We\'ll remind you via email when the gift card balance is low on your account, and you\'ll be able to stream TV shows and movies for a partial month. Once your gift card balance is consumed, you\'ll need to add another gift card or payment method to your account to continue service.',
            'user_id' => 2
        ]);

        Faq::create([
            'question' => 'If I purchase a gift card in one country, can I use it in another country?',
            'answer' => 'Yes, as long as the country you\'re redeeming the Netflix Gift Card in uses the same currency as the one you purchased it from.',
            'user_id' => 5
        ]);

        Faq::create([
            'question' => 'Do Netflix Gift Cards expire?',
            'answer' => 'No. Netflix Gift Cards do not expire and that information is printed on the back of each card.',
            'user_id' => 1
        ]);

        Faq::create([
            'question' => 'Can I use a Netflix Gift Card if my account is on hold?',
            'answer' => 'Yes, you can visit netflix.com/redeem to redeem your Netflix Gift Card. If the gift card amount does not cover the cost for a full month (based on your current plan price) we will prorate the account for the number of days it covers. Once you redeem the gift card, it can take up to 60 minutes for the hold to be completely removed. If you have issues redeeming your gift card, you can contact customer service by clicking on Start Live Chat or Call Us below. A customer service agent will be able to help you redeem the gift card.',
            'user_id' => 4
        ]);

        Faq::create([
            'question' => 'What happens to my Netflix Gift Card balance when I cancel my account?',
            'answer' => 'Your account will be cancelled once your Netflix Gift Card balance has been completely consumed. After your cancellation request, you\'ll be able to continue streaming for as many months of service as you have left on your Netflix Gift Card. Once your Netflix Gift Card balance runs out, your cancellation will be effective and you will no longer be able to stream.',
            'user_id' => 2
        ]);
    }
}
