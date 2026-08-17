<?php
/**
 * 320 Grit Careers — Shared Demo Job Data
 * Replace this with Custom Post Type queries later.
 * Structure designed for easy migration to WP_Query / get_posts.
 */

if ( ! defined( 'ABSPATH' ) ) {
	// Allow direct inclusion for development / static preview.
	// In production this file will be required from within WordPress.
}

/**
 * Returns an array of job positions.
 * Keys match the fields expected by templates.
 */
function grit_get_demo_jobs() {
	return array(
		array(
			'id'              => 'project-manager',
			'slug'            => 'project-manager',
			'title'           => 'Project Manager',
			'department'      => 'Project Management',
			'location'        => 'California, USA',
			'employment_type' => 'Full-Time',
			'short_desc'      => 'Lead projects from planning to delivery while building strong client relationships.',
			'posted_date'     => '2026-05-10',
			'excerpt'         => 'We are seeking an experienced Project Manager to lead and deliver complex projects with excellence, safety, and integrity.',
			'overview'        => 'The Project Manager will be responsible for planning, executing, and closing projects on time and within budget while maintaining the highest standards of quality and safety. You will work closely with clients, field teams, and stakeholders to ensure successful project delivery.',
			'reports_to'      => 'Director of Operations',
			'travel'          => 'As required',
			'responsibilities'=> array(
				'Manage project scope, schedule, and budget',
				'Lead and mentor project teams',
				'Communicate with clients and stakeholders',
				'Ensure quality, safety, and project standards',
				'Resolve issues and drive solutions',
			),
			'qualifications'  => array(
				'5+ years of construction management experience',
				'Strong leadership and communication skills',
				'Proficiency in Procore/MS Project a plus',
				'Bachelor\'s degree in Construction Management or related field',
			),
			'benefits'        => array(
				'Competitive compensation',
				'Health, dental & vision benefits',
				'401(k) with company match',
				'Professional development',
				'A culture that values people',
			),
			'why_grit'        => array(
				'People First Culture',
				'Growth & Development',
				'Competitive Benefits',
				'Challenging Projects',
				'Make a Real Impact',
			),
		),
		array(
			'id'              => 'superintendent',
			'slug'            => 'superintendent',
			'title'           => 'Superintendent',
			'department'      => 'Field Operations',
			'location'        => 'California, USA',
			'employment_type' => 'Full-Time',
			'short_desc'      => 'Oversee field operations and ensure projects are built safely and on time.',
			'posted_date'     => '2026-05-08',
			'excerpt'         => 'Lead on-site construction activities, coordinate subcontractors, and uphold the highest safety and quality standards.',
			'overview'        => 'The Superintendent is the on-site leader responsible for day-to-day field operations. You will coordinate trades, manage schedules, enforce safety protocols, and ensure work meets 320 Grit quality standards.',
			'reports_to'      => 'Senior Project Manager',
			'travel'          => 'Site-based',
			'responsibilities'=> array(
				'Direct and coordinate all on-site construction activities',
				'Enforce safety policies and maintain a safe work environment',
				'Coordinate subcontractors and material deliveries',
				'Monitor progress against schedule and budget',
				'Document daily reports and quality control',
			),
			'qualifications'  => array(
				'7+ years of field supervision experience in commercial construction',
				'OSHA 30 certification required',
				'Strong knowledge of building codes and construction methods',
				'Excellent leadership and problem-solving skills',
			),
			'benefits'        => array(
				'Competitive compensation',
				'Health, dental & vision benefits',
				'401(k) with company match',
				'Professional development',
				'A culture that values people',
			),
			'why_grit'        => array(
				'People First Culture',
				'Growth & Development',
				'Competitive Benefits',
				'Challenging Projects',
				'Make a Real Impact',
			),
		),
		array(
			'id'              => 'project-engineer',
			'slug'            => 'project-engineer',
			'title'           => 'Project Engineer',
			'department'      => 'Project Management',
			'location'        => 'California, USA',
			'employment_type' => 'Full-Time',
			'short_desc'      => 'Support project managers with documentation, planning and day-to-day coordination.',
			'posted_date'     => '2026-05-12',
			'excerpt'         => 'Provide technical and administrative support to Project Managers while developing core project management skills.',
			'overview'        => 'The Project Engineer assists the Project Manager in planning, documenting, and coordinating project activities. This is an excellent growth role for professionals looking to advance into Project Management.',
			'reports_to'      => 'Project Manager',
			'travel'          => 'Occasional',
			'responsibilities'=> array(
				'Prepare and track submittals, RFIs, and change orders',
				'Assist with schedule updates and progress tracking',
				'Coordinate with field teams and design consultants',
				'Maintain project documentation and filing systems',
				'Support cost control and quantity tracking',
			),
			'qualifications'  => array(
				'2+ years of construction project engineering experience',
				'Bachelor\'s degree in Construction Management, Civil Engineering, or related field',
				'Proficiency with Procore or similar construction software',
				'Strong organizational and communication skills',
			),
			'benefits'        => array(
				'Competitive compensation',
				'Health, dental & vision benefits',
				'401(k) with company match',
				'Professional development',
				'A culture that values people',
			),
			'why_grit'        => array(
				'People First Culture',
				'Growth & Development',
				'Competitive Benefits',
				'Challenging Projects',
				'Make a Real Impact',
			),
		),
		array(
			'id'              => 'estimator',
			'slug'            => 'estimator',
			'title'           => 'Estimator',
			'department'      => 'Preconstruction',
			'location'        => 'California, USA',
			'employment_type' => 'Full-Time',
			'short_desc'      => 'Prepare accurate cost estimates and support winning proposals.',
			'posted_date'     => '2026-05-05',
			'excerpt'         => 'Develop detailed, competitive estimates that help 320 Grit win the right work.',
			'overview'        => 'The Estimator is responsible for preparing complete and accurate cost estimates for bids and proposals. You will analyze drawings, specifications, and historical data to produce reliable pricing.',
			'reports_to'      => 'Preconstruction Manager',
			'travel'          => 'Minimal',
			'responsibilities'=> array(
				'Analyze plans and specifications to prepare detailed estimates',
				'Solicit and evaluate subcontractor and supplier pricing',
				'Prepare bid packages and proposal documents',
				'Maintain historical cost databases',
				'Support value-engineering and constructability reviews',
			),
			'qualifications'  => array(
				'4+ years of commercial construction estimating experience',
				'Proficiency with estimating software (e.g., Bluebeam, Excel, or dedicated platforms)',
				'Strong analytical and numerical skills',
				'Bachelor\'s degree preferred',
			),
			'benefits'        => array(
				'Competitive compensation',
				'Health, dental & vision benefits',
				'401(k) with company match',
				'Professional development',
				'A culture that values people',
			),
			'why_grit'        => array(
				'People First Culture',
				'Growth & Development',
				'Competitive Benefits',
				'Challenging Projects',
				'Make a Real Impact',
			),
		),
		array(
			'id'              => 'assistant-project-manager',
			'slug'            => 'assistant-project-manager',
			'title'           => 'Assistant Project Manager',
			'department'      => 'Project Management',
			'location'        => 'California, USA',
			'employment_type' => 'Full-Time',
			'short_desc'      => 'Assist in project planning, coordination and successful project delivery.',
			'posted_date'     => '2026-05-11',
			'excerpt'         => 'Support Project Managers in delivering complex construction projects on time and within budget.',
			'overview'        => 'The Assistant Project Manager works closely with the Project Manager to coordinate project activities, manage documentation, and support client and field communication.',
			'reports_to'      => 'Project Manager',
			'travel'          => 'As required',
			'responsibilities'=> array(
				'Assist with project planning and schedule management',
				'Coordinate documentation, submittals, and RFIs',
				'Support cost tracking and change management',
				'Communicate with clients, consultants, and field teams',
				'Help ensure quality and safety standards are met',
			),
			'qualifications'  => array(
				'3+ years of construction project coordination experience',
				'Bachelor\'s degree in Construction Management or related field preferred',
				'Experience with Procore or similar platforms',
				'Strong communication and organizational skills',
			),
			'benefits'        => array(
				'Competitive compensation',
				'Health, dental & vision benefits',
				'401(k) with company match',
				'Professional development',
				'A culture that values people',
			),
			'why_grit'        => array(
				'People First Culture',
				'Growth & Development',
				'Competitive Benefits',
				'Challenging Projects',
				'Make a Real Impact',
			),
		),
		array(
			'id'              => 'field-engineer',
			'slug'            => 'field-engineer',
			'title'           => 'Field Engineer',
			'department'      => 'Field Operations',
			'location'        => 'California, USA',
			'employment_type' => 'Full-Time',
			'short_desc'      => 'Provide technical support on-site and bridge the gap between design and construction.',
			'posted_date'     => '2026-05-09',
			'excerpt'         => 'Support field operations with technical expertise, quality control, and documentation.',
			'overview'        => 'The Field Engineer works on-site to support the Superintendent and Project Manager with technical reviews, quality assurance, and coordination between design and construction teams.',
			'reports_to'      => 'Superintendent / Project Manager',
			'travel'          => 'Site-based',
			'responsibilities'=> array(
				'Review drawings and specifications for constructability',
				'Perform quality control inspections and documentation',
				'Coordinate RFIs and design clarifications',
				'Support layout and surveying activities',
				'Assist with as-built documentation',
			),
			'qualifications'  => array(
				'2+ years of field engineering or construction experience',
				'Bachelor\'s degree in Civil Engineering, Construction Management, or related field',
				'Familiarity with construction drawings and specifications',
				'Strong attention to detail and communication skills',
			),
			'benefits'        => array(
				'Competitive compensation',
				'Health, dental & vision benefits',
				'401(k) with company match',
				'Professional development',
				'A culture that values people',
			),
			'why_grit'        => array(
				'People First Culture',
				'Growth & Development',
				'Competitive Benefits',
				'Challenging Projects',
				'Make a Real Impact',
			),
		),
		array(
			'id'              => 'safety-manager',
			'slug'            => 'safety-manager',
			'title'           => 'Safety Manager',
			'department'      => 'Field Operations',
			'location'        => 'California, USA',
			'employment_type' => 'Full-Time',
			'short_desc'      => 'Lead safety culture and ensure compliance across all job sites.',
			'posted_date'     => '2026-05-07',
			'excerpt'         => 'Champion a zero-incident culture and ensure every project meets the highest safety standards.',
			'overview'        => 'The Safety Manager develops, implements, and oversees safety programs across all 320 Grit projects. You will train teams, conduct audits, and drive continuous improvement in safety performance.',
			'reports_to'      => 'Director of Operations',
			'travel'          => 'Frequent site visits',
			'responsibilities'=> array(
				'Develop and maintain company-wide safety programs and policies',
				'Conduct site audits, inspections, and incident investigations',
				'Lead safety training and orientation programs',
				'Ensure OSHA and regulatory compliance',
				'Analyze safety metrics and drive improvement initiatives',
			),
			'qualifications'  => array(
				'5+ years of construction safety management experience',
				'CSP, CHST, or equivalent certification preferred',
				'Deep knowledge of OSHA standards and best practices',
				'Strong training and communication skills',
			),
			'benefits'        => array(
				'Competitive compensation',
				'Health, dental & vision benefits',
				'401(k) with company match',
				'Professional development',
				'A culture that values people',
			),
			'why_grit'        => array(
				'People First Culture',
				'Growth & Development',
				'Competitive Benefits',
				'Challenging Projects',
				'Make a Real Impact',
			),
		),
		array(
			'id'              => 'preconstruction-manager',
			'slug'            => 'preconstruction-manager',
			'title'           => 'Preconstruction Manager',
			'department'      => 'Preconstruction',
			'location'        => 'California, USA',
			'employment_type' => 'Full-Time',
			'short_desc'      => 'Lead preconstruction efforts from concept through successful bid award.',
			'posted_date'     => '2026-05-06',
			'excerpt'         => 'Guide estimating, design coordination, and proposal development to win the right projects.',
			'overview'        => 'The Preconstruction Manager oversees the entire preconstruction process, from initial pursuit strategy through final proposal submission. You will lead estimators, coordinate with design teams, and ensure competitive, accurate bids.',
			'reports_to'      => 'VP of Preconstruction',
			'travel'          => 'Occasional',
			'responsibilities'=> array(
				'Lead pursuit strategy and go/no-go decisions',
				'Oversee estimating teams and bid quality',
				'Coordinate design-assist and constructability reviews',
				'Manage proposal development and client presentations',
				'Build and maintain subcontractor and supplier relationships',
			),
			'qualifications'  => array(
				'8+ years of preconstruction or estimating leadership experience',
				'Strong understanding of commercial construction methods and costs',
				'Excellent client presentation and negotiation skills',
				'Bachelor\'s degree in Construction Management or related field',
			),
			'benefits'        => array(
				'Competitive compensation',
				'Health, dental & vision benefits',
				'401(k) with company match',
				'Professional development',
				'A culture that values people',
			),
			'why_grit'        => array(
				'People First Culture',
				'Growth & Development',
				'Competitive Benefits',
				'Challenging Projects',
				'Make a Real Impact',
			),
		),
		array(
			'id'              => 'accounting-specialist',
			'slug'            => 'accounting-specialist',
			'title'           => 'Accounting Specialist',
			'department'      => 'Corporate',
			'location'        => 'California, USA',
			'employment_type' => 'Full-Time',
			'short_desc'      => 'Support project and corporate accounting with accuracy and integrity.',
			'posted_date'     => '2026-05-04',
			'excerpt'         => 'Handle accounts payable, receivable, and project cost tracking with precision.',
			'overview'        => 'The Accounting Specialist supports the finance team with day-to-day accounting functions, including AP/AR, job cost tracking, and financial reporting support.',
			'reports_to'      => 'Controller',
			'travel'          => 'None',
			'responsibilities'=> array(
				'Process accounts payable and receivable',
				'Support job cost coding and project accounting',
				'Reconcile accounts and prepare supporting schedules',
				'Assist with month-end close processes',
				'Maintain accurate financial records',
			),
			'qualifications'  => array(
				'3+ years of accounting experience, preferably in construction',
				'Proficiency with accounting software (e.g., Sage, QuickBooks, or ERP systems)',
				'Strong attention to detail and organizational skills',
				'Associate or Bachelor\'s degree in Accounting preferred',
			),
			'benefits'        => array(
				'Competitive compensation',
				'Health, dental & vision benefits',
				'401(k) with company match',
				'Professional development',
				'A culture that values people',
			),
			'why_grit'        => array(
				'People First Culture',
				'Growth & Development',
				'Competitive Benefits',
				'Challenging Projects',
				'Make a Real Impact',
			),
		),
	);
}

/**
 * Get a single job by slug.
 */
function grit_get_job_by_slug( $slug ) {
	$jobs = grit_get_demo_jobs();
	foreach ( $jobs as $job ) {
		if ( $job['slug'] === $slug ) {
			return $job;
		}
	}
	return null;
}

/**
 * Get related jobs (exclude current).
 */
function grit_get_related_jobs( $current_slug, $limit = 3 ) {
	$jobs = grit_get_demo_jobs();
	$related = array();
	foreach ( $jobs as $job ) {
		if ( $job['slug'] !== $current_slug ) {
			$related[] = $job;
			if ( count( $related ) >= $limit ) {
				break;
			}
		}
	}
	return $related;
}
