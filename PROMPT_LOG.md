Prompt Log — Portfolio Development
**Student: **Prince Cedrick G. Ancheta
**Tool used: **OpenCode (AI coding agent) with Laravel
**Prompt 1**
1. **Task: **Converting the Folio Template with New Colors
2. **Prompt used:**
*Use this template as reference: https://themewagon.github.io/folio-tailwind/ (Tailwind + Alpine.js portfolio template, pages: index.html, projects.html).*
*Convert this into a Laravel Blade project for "**My_Portfolio**". Keep the exact same layout, sections, animations (reveal classes), fonts, spacing, and structure — do not change the design/style itself.*
*Only change the color scheme (replace existing theme colors with):*
*- **Background: #**000000*
*- **Accent: #**95E7B3*
*- Text/**Secondary: #**FFFFFF*
*Keep all sections as-**is:** hero, services, work/selected projects, about, reviews, blog, contact. Convert to Blade layout **with @yield/@**section or components, move repeated markup (navbar, footer) into partials. Keep Alpine.js and Tailwind setup working in Laravel (via Vite).*
*Don't rewrite copy, remove sections, or redesign layout — only recolor to the palette above.*
3. **Result/Output: **The agent converted the Folio template referenced from the live demo link into a Laravel Blade project, keeping the same layout, sections, fonts, and animations, and applied the new color palette (black background, mint green accent, white text). Navbar and footer were split into partials and Tailwind/Alpine.js worked correctly. No follow-up was needed.
**Prompt 2**
4. **Task: **Basic Info, Education, and Skills Content
5. **Prompt used:**
*Replace placeholders in the portfolio with real content:*
*Navbar: full name "Prince Cedrick G. Ancheta"*
*Hero section: "Prince Cedrick G. **Ancheta" —** Title: "ITCS Student | Aspiring IT Professional"*
*Profile picture: public/images/profile.jpg*
*Bio: "I'm a Filipino IT student passionate about technology, problem-solving, and creative thinking. I'm continuously developing my skills in programming, systems, and digital tools by learning through hands-on experience and building practical projects."*
*Contact: princecedrickancheta169@gmail.com, 09063976541, Facebook link, Instagram link*
*Education:*
*- Holy Cross School, 2022–2023, High School*
*- Data Center College of **Bangued**, 2026–2027, currently enrolled*
*Skills section: add a "Skills" tag above the badges: HTML/CSS, JavaScript, PHP, Laravel, MySQL, C#, C++*
6. **Result/Output: **The agent filled in the real name, title, bio, profile picture, and contact info in the Basic Info section, added both education entries, and added a 'Skills' label above the skill badges. Everything displayed correctly on the first attempt.
**Prompt 3**
7. **Task: **Navbar Labels, Removing Sections, Simplifying Contact, Separating Education
8. **Prompt used:**
*Navbar: change "Hire me" to "Contact me", change logo text to "My Portfolio".*
*Remove: testimonials/reviews section, blog section, and the contact form (keep no form fields).*
*Replace contact with simple clickable links: email, phone, Facebook, Instagram, GitHub (same style as rest of site).*
*Move Education out of About section into its own separate section (own heading, between About and Projects). Update navbar link to match.*
*Profile picture location: public/images/profile.jpg (same filename as before, project path C:\xampp\htdocs\My_Portfolio)*
9. **Result/Output: **The agent updated the navbar labels, removed the testimonials, blog, and contact form sections, and replaced the contact section with simple clickable icons/links instead of a form. It also moved the Education section out of About into its own dedicated section with a working navbar link. All changes applied correctly with no layout issues.
**Prompt 4**
10. **Task: **Projects and GitHub Links
11. **Prompt used:**
*Update the Projects section:*
*- Capstone System — full-stack capstone project demonstrating skills for the ITCS program — GitHub: https://github.com/PrinceCedrickAncheta/Capstone_System (make the whole card clickable, opens in new tab)*
*Add GitHub icon in navbar/footer/contact linking to: https://github.com/PrinceCedrickAncheta/pca-portfolio*
12. **Result/Output: **The agent added the Capstone System project card with a working clickable link to its GitHub repository, and added a GitHub icon in the navbar, footer, and contact section linking to the personal GitHub profile. This worked correctly without issues.

**Prompt 5**
13. **Task: **Keeping Only the Capstone Project and Updating Stats
14. **Prompt used:**
*In the "Selected work" / Portfolio section:*
*- Remove the "All projects →" link*
*- Remove every project card except one. Keep only:*
*  - Title: Capstone System*
*  - Description: "This is my work"*
*  - GitHub link: https://github.com/PrinceCedrickAncheta/Capstone_System (card clickable, opens in new tab)*
*Update the stats/numbers section to:*
*- 2027 — Expected Graduation*
*- 1 — Projects Built*
*- 7 — Languages Known*
15. **Result/Output: **The agent removed the 'All projects' link and all project cards except the Capstone System card, updating its description and GitHub link as requested. It also updated the stats section with the new numbers and labels. Everything displayed correctly on the first try.
**Prompt 6**
16. **Task: **Correcting the High School Strand
17. **Prompt used:**
*Update the Education section: change Holy Cross School entry from "High School" to "HUMSS" (Humanities and Social Sciences strand).*
18. **Result/Output: **The agent corrected the Holy Cross School entry in the Education section to show 'HUMSS' instead of the generic 'High School' label. The change applied correctly with no other content affected.
**Prompt 7**
19. **Task: **Updating Contact Links and Interactions
20. **Prompt used:**
*Update the contact section:*
*- Facebook link: https://www.facebook.com/profile.php?id=100088517885935&rdid=xtAUDsD5oVIuE8Fw&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F17WxbRDdLR#*
*- Instagram link: https://www.instagram.com/princecedrick_a*
*- Make email clickable (mailto:) so it opens the mail app.*
*- Phone number: clicking it should just show/reveal the number on screen (not open a dialer).*
21. **Result/Output: **The agent updated the Facebook and Instagram links to the correct profile URLs, made the email clickable to open the mail app via mailto:, and changed the phone number behavior so clicking it reveals the number on screen instead of launching a dialer. All changes worked correctly on the first attempt.
**Prompt 8**
22. **Task:** Professional Polish Pass
23. **Prompt used:** "Review the whole portfolio site and improve it to look more professional — better spacing, typography, section transitions, and consistency across all sections (Basic Info, Education, Projects, Contact). Fix any alignment, color contrast, or responsive issues you find. If you need any additional information or content from me to complete this properly, ask me before making changes."
24. **Result/Output:** [Fill in after running — describe what OpenCode changed, or note if it asked you for more info first]

