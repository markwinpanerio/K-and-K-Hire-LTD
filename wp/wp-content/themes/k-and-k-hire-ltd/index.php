<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package K_and_K_Hire_LTD
 */

get_header();

$card_articles = array(
	[
		'image'       => resolve_asset_uri() . 'images/section/section-1.jpg',
		'title'       => 'SCHOOL TRANSPORT SERVICES',
		'description' => 'School Transport services have been at the core of our business for over 25 years.',
		'button'      => [
			'button_url'  => '/',
			'button_text' => 'Read More',
		]
	],
	[
		'image'       => resolve_asset_uri() . 'images/section/section-2.jpg',
		'title'       => 'SPECIALIST VEHICLE SUPPLY',
		'description' => 'If you require a specialist vehicle, such as a minibus or wheelchair vehicle, we are able to supply various makes and models of vehicle – we can even convert one for you.',
		'button'      => [
			'button_url'  => '/',
			'button_text' => 'Read More',
		]
	],
	[
		'image'       => resolve_asset_uri() . 'images/section/section-3.jpg',
		'title'       => 'GARAGE SERVICES',
		'description' => 'We have a large, modern and fully equipped workshop, staffed by a team of friendly, dedicated and experienced mechanics.',
		'button'      => [
			'button_url'  => '/',
			'button_text' => 'Read More',
		]
	]
);

$testimonial = array(
	[
		'title' => '"I have been using K & K to service our school minibuses for the past 3 years and have at last found a local garage that provides a fast, efficient, reliable service, where I always find that they can fit in an unexpected breakdown. I really like the personal service where they will collect and deliver the vehicle to your doorstep. The work is organised well and they are knowledgeable about the motor trade, so that most jobs can be catered for. Their admin team is also efficient and the paperwork goes through smoothly"',
		'name'  => 'Brian Marriott',
		'job'   => 'Admin Manager | Shepherds Down School, Compton, Winchester'
	],
	[
		'title' => '“A very friendly company who are interested in customer satisfaction.  A very professional company who will always have my custom for hiring or purchasing a vehicle, and I would not have a problem recommending them”.',
		'name'  => 'Mark Duncan',
		'job'   => 'Facilities Manager | Rose Road Association'
	],
	[
		'title' => '"K&K Hire have served St Edward`s School for many years. They have provided us with transport at a moment’s notice whilst being sensitive to the needs of our pupils".',
		'name'  => 'Steve Witt',
		'job'   => 'St Edwards School, Sherfield English, Romsey'
	]
);
?>

<?php echo importTemplate('./layout/l-header'); ?>
<main class="l-index">
	<?php echo importTemplate('./components/landing', [
		'image'       => resolve_asset_uri() . 'images/background/landing-background.jpg',
		'title'       => 'K&K HIRE LTD',
		'description' => 'One of the south’s largest disabled school transport companies. Always maintaining the highest standards in comfort and safety, from the start of each journey to the end.',
		'button'      => [
			'button_url'  => '/',
			'button_text' => 'FIND OUT MORE',
		]
	]); ?>
	<?php echo importTemplate('./components/section', [
		'title'       => 'WELCOME TO K & K HIRE LTD - SPECIALIST TRANSPORT SERVICES',
		'card'         => $card_articles,
		'description' => [
			'<p>As one of the south’s largest disabled school transport suppliers, we take pride in delivering a first class, safe and reliable transport service to both disabled and able-bodied school pupils and students. We also specialise in disabled adult transport.</p>',
			'<p>As a long-established provider of school and transport services, we also excel in the provision of other specialist services.</p>',
			'<p>We supply mini-buses, wheelchair vehicles, and vans, and we have a fully equipped workshop for repairs, servicing and MOT’s. We also supply hybrid Private Hire or Hackney vehicles, details of which can be found on our Taxi website <a href="www.kandktaxirentals.co.uk"><strong>www.kandktaxirentals.co.uk</strong></a> </p>',
			'<p>Our friendly and highly experienced team of staff are committed to ensure that our clients’ requirements are met in a timely, cost effective and professional way. We aim to make a positive difference to the way we do business with our customers, so that dealing with us is a pleasant and easy experience.</p>',
			'<p>Whether your requirements are for school, adult or disabled transport, acquiring a specialist vehicle, or garage services, K&K Hire Ltd have the experience, resources and ability to meet them.</p>'
		],
	]); ?>
	<?php echo importTemplate('./components/section', [
		'invert_background'      => true,
		'title'                  => 'SCHOOL TRANSPORT SERVICES',
		'description'            => [
			'<p>School Transport services have been the core of our business for over 25 years.</p>',
			'<p>Our team of friendly and experienced staff work closely with our clients, which include Hampshire, Wiltshire and Southampton councils, to ensure that we provide them with a professional and cost-effective solution to their transport requirements. These services are provided to the highest standards in terms of cost, delivery time, comfort and safety.</p>',
			'<p>We have over two hundred vehicles in our fleet comprising of cars, minibuses and wheelchair vehicles. As we are fully committed to do as much as we can to lessen the impact on the environment from cars and vans, every car in our large fleet, is a hybrid vehicle. We have recently taken delivery of fully electric vehicles, Tesla’s, which have now been added to our fleet.</p>',
			'<p>All our vehicles are regularly serviced every 10k miles, and they are fully maintained in our own fully equipped workshops. They are also inspected and licensed by the local licensing authority.</p>',
		],
	]); ?>
	<?php echo importTemplate('./components/section', [
		'title'                  => 'SPECIALIST VEHICLE SUPPLY',
		'description'            => [
			'<p>Should you require a specialist vehicle, such as a minibus or wheelchair vehicle, we are able to supply various makes and models of vehicle. Depending on your requirements, we can either sale or lease new and used mini-buses, wheelchair vehicles, and vans.</p>',
			'<p>We also convert minibuses to make them wheelchair accessible, which includes the installation of a tail lift and the Unwin low profile tracking flooring system. All tail lifts are subsequently tested and certified, and the vehicle is then tested and certified by VOSA. Finally, the vehicle is delivered to the customer.</p>',
			'<p>If you would like further information about purchasing, leasing, or converting vehicles, please do not hesitate to <a href="'. home_url() . '#contact-us' .'" class="js-scroll">contact</a> us to discuss your requirements, and we will be happy to assist.</p>',
		],
	]); ?>
	<?php echo importTemplate('./components/section', [
		'invert_background'      => true,
		'title'                  => 'GARAGE SERVICES',
		'full_image'             => resolve_asset_uri() . 'images/section/section-4.jpg',
		'description'            => [
			'<p>We have a large, modern and fully equipped workshop which is staffed by a team of friendly, dedicated and experienced mechanics. Here we maintain and service all our vehicles, ensuring that our fleet is reliable and safe, in order to meet our transportation commitments.',
			'<p>Our workshop services are also open to the wider community, and we can offer a complete range of garage services including servicing, repairs, and MOT’s, for most makes and model of vehicle up to and including LGV’s.</p>',
			'<p>A courtesy vehicle can be supplied with prior arrangement.</p>',
			'<p>We can also arrange compliance testing, tail lift checks and certification for licenced minibuses and wheelchair accessible vehicles.</p>'
		],
	]); ?>
	<?php echo importTemplate('./components/testimonial', [
		'testimonials' => $testimonial,
	]); ?>
	<?php echo importTemplate('./components/contact-us'); ?>
</main>
<?php echo importTemplate('./layout/l-footer'); ?>

<?php
get_footer();
