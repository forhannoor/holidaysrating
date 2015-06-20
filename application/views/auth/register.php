<div id="auth_form">
<h1>Sign up for a FREE account</h1>
<?php echo validation_errors() ?>
<br />
<?php echo form_open('auth/register') ?>
<?php echo form_label('First Name', 'first_name') ?>
<br/>
<?php echo form_input('first_name') ?>
<br/>
<?php echo form_label('Last Name', 'last_name') ?>
<br/>
<?php echo form_input('last_name') ?>
<br/>
<?php echo form_label('Email', 'email') ?>
<br/>
<?php echo form_input('email', '', 'id=\'email\'') ?>
<span id="status"></span>
<br/>
<?php echo form_label('Password', 'password') ?>
<br/>
<?php echo form_password('password') ?>
<br/>
<?php echo form_label('Repeat Password', 'password_confirm') ?>
<br/>
<?php echo form_password('password_confirm') ?>
<br/>
<br />
<br />
<br/>
<p>By clicking "Submit", you are accepting <a id="click" style="cursor: pointer;">Terms of use</a></p>
<div id="terms_of_use">
<p>Holidaysrating.com (“this Website”) is a site created for users/members to make new travel buddies, gather information about travel destinations, posting reviews involving travel related issues as well as sharing of travel related photos and videos. By using and/or accessing this Website, you ("you", "user" or, "member") agree to be bound by the Terms of Use (collectively, the "Terms of Use" or "Agreement") of this Website. If you do not accept the Terms of Use of this Website, you are not authorized to use and/or access this Website. Please take note that we may review, change or modify the Terms of Use from time to time and your continued use and/or access of this Website indicates your acceptance of the Terms of Use.<br /><br />
This Website may also contain links to other websites, which are not operated by Holidaysrating.com. Holidaysrating.com has no control over the other websites and accepts no responsibility for the other websites or for any loss or damage that may arise from your use of the other websites. Your use of the other websites will be subject to the terms and conditions of use and services contained within each of such website.<br /><br />

<strong>1. General Terms of Use</strong><br />
•	By using this Website, you have given the following warranty that:<br />
(i)	all information provided or supplied by you is true, accurate and of your own personal knowledge or record;<br />
(ii)	if you are a member of Holidaysrating.com, you will safeguard your personal details and account information and will take full responsibility for any use of your account by yourself and/or any other person;<br />
(iii)	you are 15 years of age and above and have complied with this age for registration and contribution on Holidaysrating.com<br /><br />

•	By using this Website, you agree not to use any content and/or information obtained from or through this Website for:<br /><br />

(a)	commercial purpose;<br />
(b)	modification, copy, distribution, performance, display, reproduction, publishing, licensing, transfer, sale or resale purpose;<br />
(c)	access, monitoring or copy using any robot, spider, scraper or other automated means without our written permission;<br />
(d)	deep-linking for any purpose without our written permission; or<br />
(e)	“frame”, “mirror” or incorporate to any website without our written permission.<br /><br />

•	Copying, transmission, reproduction, republication, posting or redistribution of any content or any portion thereof from this Website is strictly prohibited without any written permission from Holidaysrating.com. <br /><br />

<strong>2. Privacy Policy</strong><br />
Holidaysrating.com is concerned with protecting your privacy when using this Website. Please click <?php echo anchor('privacy/privacy_policy', 'Privacy Policy') ?> for further information.<br /><br />

<strong>3. Prohibitions and Liability</strong><br />
We condemn any misuse of this Website. You shall not commit or encourage a criminal offence; transmit or distribute a virus or other technologically harmful material or post any other material which is malicious, technologically harmful, in breach of confidence or in any way offensive or obscene; hack into any aspect of this Website; corrupt data; cause annoyance to other users; infringe upon the rights of any other person’s proprietary rights; send any unsolicited advertising or promotional material, commonly referred to as “spam”; or attempt to affect the performance or functionality of any computer facilities of or accessed through this Website. Breaching this provision would constitute a criminal offence under the law. Holidaysrating.com will report any such breach to the relevant law enforcement authorities and disclose your identity to them.<br /><br />
We will not be liable for any loss or damage caused by a distributed denial-of-service attack, viruses or other technologically harmful material that may infect your computer equipment, computer programs, data or other proprietary material due to your use of this Website or to your downloading of any material posted on it, or on any website linked to it.<br /><br />

<strong>4. Holidaysrating.com Membership</strong><br />
•             Registration<br />
Holidaysrating.com reserves the right to cancel any account if any user is seen to be using proxy Internet Protocol addresses in order to attempt to hide the use of multiple accounts or disrupts any service in this Website.<br /><br />
•           Submission of information<br />
You are deemed to have granted Holidaysrating.com the royalty-free, perpetual, exclusive right and license to use, reproduce, modify, edit, adapt, publish, translate, create derivative works from, distribute, perform and display such material (in whole or part), or to incorporate in any form, media or technology now known or later developed by submitting any information, content or material to us.<br /><br />
•	Premium Membership<br />
For Premium Members, a fee of $3.99 is payable for enjoyment of all premium privileges. You will only be charged once for Premium Membership of a lifetime. In the event you cancel your Premium Membership subscription, we will not provide any refund of your Premium Membership fee.<br /><br />
Premium Membership privileges include:<br />
(i)	Advertisement-free surfing of Holidaysrating.com<br />
(ii)	Advertisement-free video clips<br />
(iii)	Downloadable video clips<br /> 
(iv)	More to be included<br /><br />

•          Failure to comply<br />
Holidaysrating.com reserves the rights to delete, cancel or take action against any non-compliance of the Terms and Conditions by you. You may be sent an email stating the non-compliance by you which may include a warning or statement of refusal/rejection by Holidaysrating.com.<br /><br />

<strong>5. Use of Interactive Areas</strong><br />
•	Submission of Information<br />
Holidaysrating.com is an interactive website and we appreciate receiving information from all users. Any information to this Website including hotel reviews, photographs, videos, comments, suggestions, ideas etc submitted by you to this Website will be deemed as having granted Holidaysrating.com and its affiliates a right to use, reproduce, modify, translate, distribute, publish such information with non-exclusivity, royalty-free, perpetuality, transferability and full sublicensability. In addition, Holidaysrating.com also has a right to use the name of submission for publicity, modification, reproduction, distribution and/or translation purposes. Any information submitted to this Website is also non-confidential and non-proprietary. <br /><br />

•	Reviews and Comments<br />
This Website contains discussion, bulletin, review or forum services in which users may post reviews and comments of travel experiences or other information regarding travels and holidays or other content, materials permitted by Holidaysrating.com. Please be advised that use of such services is at your own risk and your sole responsibility.<br /><br />
By using these services, you agree not to post, upload, distribute, publish or create information including text, data, photos, videos, graphic or any other material that is/are<br />
(i)	false, unlawful, misleading, defamatory, obscene, pornographic, harassing, threatening, invasive of privacy or other objectionable;<br />
(ii)	containing any information that is offensive to the community such as racism, bigotry, hatred or any kind of physical harm against any group or individual;<br />
(iii)	containing any information that involves illegal activity, criminal offence, violation of civil rights or any rules and regulations to local, state, national or international law;<br />
(iv)	containing any information that may infringe copyright or intellectual or proprietary right of any party;<br />
(v)	content of commercial activities and/or sales without prior consent of Holidaysrating.com; or<br />
(vi)	viruses, corrupted data, spam, junk, phishing mail or other harmful files. <br /><br />

•	Disclaimer and Indemnity<br />
Holidaysrating.com is not liable for any information posted, uploaded, published or distributed by users on this Website, or for any loss or damage arising from the same, nor responsible for any prohibited postings, uploads, publishings or distribution by users. Holidaysrating.com is also not liable for any statements, representations or information provided by users on discussion, forum, bulletin and/or review. Holidaysrasting.com reserves the right to remove, edit, modify any information posted hereto without notice at any time for any reason. <br />
You agree to indemnify, defend and hold harmless Holidaysrating from any claim, liability, damages and/or costs arising from your use of these services or your breach of the Terms of Use provided herein.<br /><br />

<strong>6. Travel Information</strong><br />
Any information regarding travel and international destinations is subject to travel information, prohibitions, warnings, announcements and advisories produced, provided and supplied by official authorities of every country governments. Holidaysrating.com does not represent or warrant that travel information on this Website is accurate and is not liable for any loss or damages that may result from the inaccuracy of such information.<br /><br />

<strong>7. Exclusion and Limitation of Liability</strong><br />
Holidaysrating.com does not guarantee the accuracy of any information, contents and materials contributed by users on this Website. Unless expressly stated to the contrary to the fullest extent permitted by law, Holidaysrating.com, content providers and advertisers hereby expressly exclude all conditions, warranties and other terms which might otherwise be implied by statute, common law or the law of equity and shall not be liable for any damages whatsoever, including but without limitation to any direct, indirect, special, consequential, punitive or incidental damages, or damages for loss of use, profits, data or other intangibles, damage to goodwill or reputation, or the cost of procurement of substitute goods and services, arising out of or related to the use, inability to use, performance or failures of this Website or other websites and any materials posted on this Website, irrespective of whether such damages were foreseeable or arise in contract, tort, equity, restitution, by statute, at common law or otherwise. Holidaysrating.com is not exempted from any liability for death or personal injury arising from its negligence, nor for fraudulent misrepresentation, misrepresentation as to a fundamental matter or any other liability which cannot be excluded or limited under applicable law.<br /><br />

<strong>8. Affiliates </strong><br />
You may join our affiliate program to promote or advertise for Holidaysrating.com by linking to this Website, provided that you do so in a fair and legal manner and does not damage the reputation of Holidaysrating.com or take advantage of it. You must not establish a link from any website which does not belong to you. Holidaysrating.com reserves the right to withdraw linking permission without notice.<br /><br />

<strong>9. Disclaimer</strong><br />
Except where expressly stated, third party contents, information and materials featured on this Website are in no way associated, link or affiliated with Holidaysrating.com and you shall not rely on the existence of such a connection, link or affiliation. Where a trademark or brand name is referred to on this Website, it is used solely to describe or identify the products and services provided on this Website and is in no way an assertion that such products or services are endorsed by or connected to Holidaysrating.com.<br /><br />

<strong>10. Indemnity</strong><br />
You agree to indemnify, defend and hold harmless Holidaysrating.com (including its directors, agents, employees and affiliates) from any third party claim, liability, damages and/or costs arising from your use of this Website or your breach of the Terms of Use on this page.<br /><br />

<strong>11. Disputes</strong><br />
Any dispute or claim relating in any way to your use of Holidaysrating.com will be resolved by binding arbitration, rather than in court, except that you may assert claims in small claims court if your claims qualify. 
These Terms of Use are to be construed in accordance with the laws of Australia and in the event of any dispute or claim associated with these terms and conditions, that dispute or claim shall be subject to the exclusive jurisdiction of the Australian arbitration or small claims court. 
Any dispute resolution proceedings will only be conducted on an individual basis and not in class, consolidated or representative action. In the event the claim is determined to be frivolous, you may reimburse all costs and fees incurred in such claim.<br /><br />

<strong>12. Entire Agreement</strong><br />
These Terms of Use constitute the entire agreement between you and Holidaysrating.com and supersede any preceding and contemporaneous agreement between you and Holidaysrating.com. Any waiver of any provision of the Terms of Use will only be effective in writing and signed by an authorized representative or a director of Holidaysrating.com.
Our performance of these Terms of Use is subject to existing laws and legal process, and nothing contained in these Terms of Use limits our right to comply with law enforcement or other governmental or legal requests or requirements relating to your use of this Website or information provided to or gathered by us with respect to such use. 
In the event any part of these Terms of Use is determined to be invalid or unenforceable pursuant to applicable law including, except for warranties and disclaimers stated above, then the invalid or unenforceable provision will be deemed superseded by a valid, enforceable provision that most closely matches the intent of the original provision and the remaining provisions in these Terms of Use shall continue in effect.<br /><br />

<strong>13. Corporate Social Responsibility</strong><br />
Holidaysrating.com operates and conforms to high efficiency, ethical and fair practices in its business and operations. Holidaysrating.com strives to ensure that internet and social media rules are observed in the course of business and the use of services we offer.</p>
<p style="font-size:x-small">Last updated: 10 June 2015.</p>
</div>

<script type="text/javascript">
$(document).ready(function()
{
    var emailAvailabilityUrl = "<?php echo site_url('auth/email_availability') ?>";
    
    $("#terms_of_use").hide();
    
    $("#click").click(function()
    {
        $("#terms_of_use").toggle(400);
    }
    );
    
    $("#email").blur(function(){
        var e = $(this).val();
        $.ajax({
            url : emailAvailabilityUrl,
            type: "post",
            data: {email: e},
            
            success: function(data){
                $("#status").html(data);
            },
            
            error:function(){
                console.log("failure");
            }
        });
    });
});
</script>

<?php echo form_submit('', 'Submit') ?>
&nbsp;&nbsp;&nbsp;
<?php echo form_reset('', 'Reset') ?>
<?php echo form_close() ?>
<center><img src="<?php echo base_url() ?>assets/images/view/palmleaf.jpg" alt="palmleaf" style="margin-top:8px"></center>
</div>