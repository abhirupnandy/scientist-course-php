<?php
	require 'Database.php';
	require 'functions.php';
	
	$config = require 'config.php';
	$db = new Database($config['database'], 'textajfo_guest', 'guest@123');
	
	//	check if GET request is empty - return no data html
	if ( !isset($_GET['enrollment']) && !isset($_GET['email'])) {
		echo "<h1 class='text-3xl font-semibold text-gray-900'>No Data</h1>";
		exit();
	}
	$enrollment = $_GET['enrollment'];
	$email = $_GET['email'];
	
	$note= $db->query("SELECT * FROM results WHERE enrollment = :enrollment AND email = :email",
		[
			'enrollment' => $enrollment,
			'email' => $email
		])->fetch(PDO::FETCH_ASSOC);
	
	if ( empty($note) ) {
		$heading = 'No Data';
		echo "<h1 class='text-3xl font-semibold text-gray-900'>Wrong Enrollment Number or Email ID</h1>";
		exit();
	}
	$name = ucwords($note['name']);
	$enrollment = $note['enrollment'];
	$email = $note['email'];
	$batch = $note['batch'];
	$date = date('jS F,Y', strtotime($note['date']));

	$marks = [
		'1' => $note['section1'],
		'2' => $note['section2'],
		'3' => $note['section3'],
		'4' => $note['section4'],
		'5' => $note['section5'],
		'6' => $note['section6'],
		'7' => $note['section7'],
		'8' => $note['section8'],
		'9' => $note['section9'],
		'10' => $note['section10'],
		'11' => $note['section11'],
		'Electives (total)' => $note['section12'] + $note['section13'] + $note['section14'],
	];
	$percentage = $note['percent'];
	$total = $note['total'];
	
	
	$return_HTML = "
<div class='flex flex-col justify-center item-center text-left'>
	<div class='mt-2 border-t border-gray-100'>
		<dl class='divide-y divide-gray-100'>
			<div class='py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0'>
				<dt class='text-md font-medium leading-6 text-gray-900'>Full name</dt>
				<dd class='mt-1 text-md leading-6 text-gray-700 sm:col-span-2 sm:mt-0'>{$name}</dd>
			</div>
			<div class=' py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0'>
				<dt class='text-md font-medium leading-6 text-gray-900'>Enrollment Number</dt>
				<dd class='mt-1 text-md leading-6 text-gray-700 sm:col-span-2 sm:mt-0'>{$enrollment}</dd>
			</div>
			<div class=' py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0'>
				<dt class='text-md font-medium leading-6 text-gray-900'>Email address</dt>
				<dd class='mt-1 text-md leading-6 text-gray-700 sm:col-span-2 sm:mt-0'>{$email}</dd>
			</div>
			<div class=' py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0'>
				<dt class='text-md font-medium leading-6 text-gray-900'>Date of Exam</dt>
				<dd class='mt-1 text-md leading-6 text-gray-700 sm:col-span-2 sm:mt-0'>{$date}</dd>
			</div>
			<div class=' py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0'>
				<dt class='text-md font-medium leading-6 text-gray-900'>Batch</dt>
				<dd class='mt-1 text-md leading-6 text-gray-700 sm:col-span-2 sm:mt-0'>{$batch}</dd>
			</div>
			<div class=' py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0'>
				<dt class='text-md font-medium leading-6 text-red-500'>Total Marks</dt>
				<dd class='mt-1 text-md leading-6 text-red-500 sm:col-span-2 sm:mt-0'>{$total}</dd>
			</div>
			<div class=' py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0'>
				<dt class='text-md font-medium leading-6 text-red-500'>Percentage</dt>
				<dd class='mt-1 text-md leading-6 text-red-500 sm:col-span-2 sm:mt-0'>{$percentage}%</dd>
			</div>
			<div class=' py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0'>
				<dt class='text-md font-medium leading-6 text-gray-900'>Marks</dt>
				<dd class='mt-2 text-md text-gray-900 sm:col-span-2 sm:mt-0'>
					<ul role='list' class='divide-y divide-gray-100 rounded-md border border-gray-200'>";
	foreach ( $marks as $key => $value ) {
		$return_HTML .= "
						<li class='flex items-center justify-between py-4 pr-5 text-sm leading-6 border'>
							<div class='flex w-0 flex-1 items-center'>
								<div class='ml-4 flex min-w-0 flex-1 gap-2'>
									<span class='truncate font-medium'>Section {$key}</span>
									
								</div>
							</div>
							<div class='ml-4 flex-shrink-0'>
								<p class='font-medium text-indigo-600'>{$value}</p>
							</div>
						</li>
		";
	}
	$return_HTML .= "
					</ul>
				</dd>
			</div>
		</dl>
	</div>
</div>
	";
	echo $return_HTML;