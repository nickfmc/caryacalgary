# New Custom ACF Blocks - Content Guide

## Stats & Quotes Flip Block

### Block Overview
Large stat cards that flip on hover to reveal testimonial quotes. Perfect for displaying impactful numbers with personal stories.

### How to Use
1. In the WordPress editor, search for "Stats & Quotes Flip" block
2. Add optional section title (e.g., "2026 Impact")
3. Add optional section description (e.g., "Outcomes are measured using participant surveys...")
4. Add stat items using the repeater field

### Example Content Structure

#### Stat Card 1
- **Stat Number**: 2,385
- **Stat Label**: Individuals Served
- **Stat Description**: Carya provided counselling services to 2,385 individuals
- **Quote Text**: "Thanks to Carya's affordable services, my child was able to make real progress, and we were able to support him without financial hardship"
- **Background Color**: #593084 (default purple)

#### Stat Card 2
- **Stat Number**: 842
- **Stat Label**: Participants
- **Stat Description**: 842 participants attended Families in Community programming
- **Quote Text**: "It gave me community and support when I needed it desperately, which helped provide a positive foundation for parenting which will impact my child for her whole life. It's kind of a big deal!"

#### Stat Card 3
- **Stat Number**: 16
- **Stat Label**: Wellness Groups
- **Stat Description**: 16 distinct Wellness Collective groups provided 228 sessions to over 200 participants
- **Quote Text**: After completing Parenting Anxious Kids, 79% of children reduced anxiety and 95% of parents felt more positive

#### Stat Card 4
- **Stat Number**: 22,500+
- **Stat Label**: Village Commons Visits
- **Stat Description**: Over 1,900 community members accessed Village Commons more than 22,500 times
- **Quote Text**: "We're new to the city and were looking online for things to do together and how to meet people... Carya has been inclusive."

#### Stat Card 5
- **Stat Number**: 1,740
- **Stat Label**: Financial Wellness
- **Stat Description**: 1740 participants accessed Community Financial Wellness programs or received financial coaching services
- **Quote Text**: "The program taught me how to control my finances... all of which I can pass along to my 3 children."

---

## Service Pillars Carousel Block

### Block Overview
A carousel showcasing your three main service pillars with compelling images, detailed descriptions, and testimonial quotes. Users can swipe through each pillar.

### How to Use
1. In the WordPress editor, search for "Service Pillars Carousel" block
2. Add section title (e.g., "How We Help")
3. Add section introduction text explaining the overall approach
4. Add 3 pillar items using the repeater field

### Example Content Structure

#### Pillar 1: Barrier Free Service
- **Pillar Title**: Barrier Free Service
- **Pillar Content**: 
  > When support feels difficult to access, many people delay reaching out until challenges become overwhelming.
  > 
  > Carya's barrier-free approach helps reduce obstacles to care by offering affordable, accessible, community-based supports where people feel welcomed—not judged.
- **Pillar Image**: Upload a welcoming, diverse community image
- **Quote**: [Add a relevant testimonial about accessibility]
- **Background Color**: #593084 (purple)

#### Pillar 2: Early Interventions
- **Pillar Title**: Early Interventions
- **Pillar Content**: 
  > The earlier people receive support, the greater the opportunity to prevent challenges from escalating into crisis.
  > 
  > Early intervention strengthens mental wellbeing, family relationships, parenting confidence, and long-term stability before situations become more complex and harder to navigate.
- **Pillar Image**: Upload an image showing early childhood or family support
- **Quote**: [Add a relevant testimonial about early support impact]
- **Background Color**: #e17241 (orange) or #593084 (purple)

#### Pillar 3: Wrap-Around Supports
- **Pillar Title**: Wrap-Around Supports
- **Pillar Content**: 
  > People rarely experience challenges in isolation. Mental health, financial instability, housing, grief, and social isolation often overlap.
  > 
  > Carya's wrap-around model connects individuals to coordinated supports across programs and services, reducing the need to navigate systems alone or repeatedly retell their stories.
- **Pillar Image**: Upload an image showing connected community or holistic support
- **Quote**: [Add a relevant testimonial about comprehensive support]
- **Background Color**: #8a7a34 (green) or #593084 (purple)

---

## Design Notes

### Color Palette (from your theme)
- Primary Purple: #593084
- Light Purple: #8364a3
- Orange: #e17241
- Green: #8a7a34
- Blue: #65b4e2
- Yellow: #e4a726

### Responsive Behavior
- **Stats Flip Block**: Displays 1 column on mobile, 2 columns on tablet, and 3+ columns on desktop
- **Service Pillars Block**: Always displays one slide at a time with navigation arrows and pagination dots

### Customization Tips
1. Use different background colors for each card to create visual variety
2. Keep stat numbers bold and simple (e.g., "2,385" or "100%")
3. Quotes should be personal and impactful (100-150 words max)
4. Images should be high quality, at least 1200px wide

---

## Next Steps

1. **Sync ACF Fields**: Go to Custom Fields → Sync (WordPress admin) to load the new field groups
2. **Compile Styles**: Run your build process to compile the new SCSS:
   - `npm run build` or `npm run dev` (depending on your setup)
3. **Add Blocks**: Edit any page and search for the new blocks in the block inserter
4. **Populate Content**: Use the content guide above to fill in your stats and service pillars

## Troubleshooting

- **Blocks don't appear**: Make sure ACF Pro is active and field groups are synced
- **Styles not loading**: Recompile SCSS using your build process
- **Flip animation not working**: Clear browser cache and check that CSS is compiled
- **Carousel not working**: Check browser console for JS errors, ensure Swiper library is loaded
