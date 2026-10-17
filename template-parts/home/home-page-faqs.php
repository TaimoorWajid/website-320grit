<?php

if (!defined('ABSPATH')) exit;

$faqs = array(

    array('q' => 'What construction services does 320 Grit provide?', 'a' => '320 Grit provides Bid-Build, Design-Build, Expert Witness, and Forensic Accounting services. Our approach is centered on helping owners and project teams make informed decisions, manage risk, control costs, and successfully deliver complex construction projects.'),

    array('q' => 'What industries does 320 Grit specialize in?', 'a' => '320 Grit serves a range of commercial and specialized markets, including Rail Road, Hospital/MOB/Imaging, Behavioral Health, Advanced Technology/Lab, Commercial, Tenant Improvement, Educational, and Hospitality projects.'),

    array('q' => 'What is 320 Grit\'s approach to construction projects?', 'a' => 'Our approach is owner and team-centric, bringing the project team together from the earliest stages through completion. We focus on preconstruction, design and planning, construction, and delivery, with attention to communication, risk management, cost, schedule, and quality.'),

    array('q' => 'Can 320 Grit help with construction disputes or expert witness services?', 'a' => 'Yes. 320 Grit provides Expert Witness services for construction-related matters, drawing on project knowledge and technical understanding to help evaluate issues, documentation, and project circumstances.'),

    array('q' => 'What is the difference between Bid-Build and Design-Build?', 'a' => 'Bid-Build typically separates the design and construction phases, while Design-Build brings design and construction together under a more integrated delivery model. 320 Grit can help project owners determine which approach best aligns with their goals, schedule, budget, and project requirements.'),

    array('q' => 'What is construction forensic accounting?', 'a' => 'Construction forensic accounting involves examining financial records, project documentation, costs, and other relevant information to help identify and evaluate financial issues associated with a construction project. 320 Grit provides Forensic Accounting services to support owners and project teams when detailed financial analysis is required.'),

    array('q' => 'How can I get started with 320 Grit on a construction project?', 'a' => 'The first step is to contact 320 Grit and discuss your project, goals, challenges, and requirements. Our team can then determine how our construction services and expertise can best support your project from planning through delivery.'),

);
?>

<!-- ============================================
SECTION 13: FAQ
============================================ -->
<section class="faq-section" id="faq">
    <div class="faq-layout">
        <div class="faq-header">
            <p class="section-eyebrow">Common Questions</p>
            <h2 class="section-headline">Everything You Need to Know</h2>
            <p class="section-body">Answers to the most frequently asked questions about our services and engagement process.</p>
            <a href="#contact" class="btn-secondary">Still have questions? Contact us.</a>
        </div>
        <div class="faq-accordion">
            <?php foreach ($faqs as $faq) : ?>
                <div class="faq-item">
                    <button class="faq-question">
                        <?php echo esc_html($faq['q']); ?>
                        <span class="faq-icon"></span>
                    </button>
                    <div class="faq-answer">
                        <p><?php echo esc_html($faq['a']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- END SECTION 13: FAQ -->