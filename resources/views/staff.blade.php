@extends('layouts.app')
@section('title', 'Encore Dance Theatre | Faculty')
@section('description', '')
@section('content')

    <div class="container">
{{--        <h1 class="head-white py-4">Our Faculty</h1>--}}
{{--        <div class="d-flex justify-content-center pb-4">--}}
{{--            <video width="100%" height="auto" poster="/images/staff-interviews-poster-image.jpg" controls>--}}
{{--                <source src="/images/edt-staff-interviews.mp4" type="video/mp4">--}}
{{--                Your browser does not support the video tag.--}}
{{--            </video>--}}
{{--        </div>--}}
    </div>

    <h1 class="head-white py-4">Our Faculty</h1>

    <div class="container py-5">
        <div class="row gy-4 poppins">
            <x-staff-member
                name="Anne Brodsky"
                image="/images/2026-faculty/anne-brodsky.webp"
                modal-id="AnneModal"
                role="Owner/Artistic Director"
            >
                Anne has been sharing her passion for dance and mentorship with students for over 30 years. She is a proud member of More Than Just Great DancingTM and Dance Educators of America. She began teaching for Encore Dance Theatre in 1992 and has owned it since 2012. Anne beams with pride over the many accomplishments of her students and her studio.
            </x-staff-member>

            <x-staff-member
                name="Emily Bromberg"
                image="/images/2026-faculty/emily-bromberg.webp"
                modal-id="EmilyModal"
            >
                Emily Bromberg grew up in Orlando, FL dancing at Rolann’s School of the Dance and Orlando Ballet. At 14 years old Emily boarded at Kirov Academy of Ballet (Universal Ballet) for their academic year and summer on scholarship.
                <br><br>
                She finished up her training at Boston Ballet School where she danced in Giselle, Sleeping Beauty and several years of The Nutcracker with Boston Ballet company as a member of the corps de ballet.
                <br><br>
                After receiving her Bachelor’s in Psychology in Providence and dancing principal roles with Festival Ballet Providence (under the direction of Mihailo Djuric) and Colorado Ballet, she moved to Miami where she spent the past  11 years with Miami City Ballet as a Principal Soloist.
                <br><br>
                Emily just completed a season in Europe dancing principal roles with the Slovak National Theatre.  She served as ballet mistress for Ballet de Barcelona in Spain and has taught at Europa Ballett (Austria), Joffrey Ballet School, Unblanche Ballet (Japan), Next Generation Ballet, Tuscaloosa Community Dancers, Rolann's School of Dance, Miami City Ballet, Southern New Hampshire Ballet School.
                <br><br>
                The pandemic brought a new passion for teaching to Ms Bromberg and she’s thrilled to be back in Miami to continue to bring up the next generation of dancers.
            </x-staff-member>

            <x-staff-member
                name="Madison Cantor"
                image="/images/2026-faculty/madison-cantor.webp"
                modal-id="MadisonModal"
            >
                Madison Ashley is a professional dancer with a B.A. in Dance from Nova Southeastern University and spent three seasons as a Miami HEAT dancer. Trained in hip-hop, jazz funk, commercial jazz, contemporary, and Latin fusion, she is passionate about helping young dancers grow in confidence, artistry, and their love for dance.
            </x-staff-member>

            <x-staff-member
                name="Lily Coniglio"
                image="/images/2026-faculty/lily-coniglio.webp"
                modal-id="LilyModal"
            >
                Lily Coniglio, a professional dancer from South Florida, is so excited to officially join the Encore family. Some of her credits include the honor of performing at Carnegie Hall multiple times where she worked with Alan Menken, Cyndi Lauper, Ashley Park, Kelly O’Hara, and many others. Lily performed with the original Broadway cast of Newsies at Walt Disney World alongside 500 other dancers from around the country for their Christmas special on ABC. Lily also trained at the Radio City Rockettes Summer Intensive for multiple summers. Lily is thrilled to share her joy, knowledge, and passion with her students.
            </x-staff-member>

            <!-- LILY -->

            <x-staff-member
                name="Karen Cowart"
                image="/images/2026-faculty/karen-cowart.webp"
                modal-id="KarenModal"
            >
                Ms Karen is part of our friendly front desk staff, always ready to lend a helping hand or a welcoming smile. She brings a background in corporate Human Resources and many years of experience assisting families in their dance education. As a proud Dance Mom of over 15 years, she understands the dance journey from a parent's perspective and is committed to creating a positive, supportive experience for both dancers and their families.
            </x-staff-member>

            <!-- END LILY -->

            <x-staff-member
                name="Bella Denton"
                image="/images/2026-faculty/bella-denton.webp"
                modal-id="BellaModal"
            >
                Bella Denton grew up in South Florida, and began dancing at the age of 3 training in ballet/pointe, tap, jazz, musical theatre, jazz funk and contemporary/lyrical. Right out of highschool she was accepted into Broadway Dance Center’s Professional Semester and spent 7 months in New York City training with some of the best teachers in the industry, performing, and learning the ins and outs of the professional dance world. After her time in NYC, Bella was invited and had her Choreography chosen to perform at Europe's top art festival: Festival Fringe in Edinburgh, Scotland. Afterwards, she moved back to South Florida and spent one season dancing on the Florida Panthers Dance Team.
                <br><br>
                Bella is currently a Miami Dolphins Cheerleader, and takes pride in dancing at all home games for the NFL community and Dolphins Fans at Hard Rock Stadium! Having teaching dance since she was 16 years old and choreographing for many years, she is immensely excited to be apart the EDT family!
            </x-staff-member>

            <x-staff-member
                name="Nelly Gibilterra"
                image="/images/2026-faculty/nelly-gibilterra.webp"
                modal-id="NellyModal"
            >
                Nelly Gibilterra has been part of Encore Dance Theatre since 2019, bringing over 20 years of experience in dance, gymnastics, and studio management. Before joining Encore, she worked at All American Gymnastics in Long Island and performed with a private event company in Manhattan.
                <br><br>
                At Encore, Nelly manages daily front desk operations, collaborating with staff to create a safe, clean, and welcoming environment. Her positive energy and attention to detail help ensure a smooth experience for students and families.
                <br><br>
                Originally from New York, Nelly moved to South Florida in 2011. She also serves as Director of Field Operations for a nonprofit youth travel baseball organization in Coral Springs, supporting young athletes on and off the field.
                <br><br>
                Nelly lives in Coral Springs with her husband, Jason, and their two children, Emma and Jack. She enjoys traveling, shopping with her daughter, cheering on her son at baseball games, and spending time with family.
            </x-staff-member>

            <x-staff-member
                name="Deana Gilday"
                image="/images/2026-faculty/deana-gilday.webp"
                modal-id="DeanaModal"
            >
                Deana is from Orlando, Florida. She had the honor of being a New York City Radio City Music Hall Rockette for several seasons. Among her other accomplishments are: the TV show Glee, Smash, Bad Romance music video with Lady Gaga, PSA with Beyonce, performed with Jennifer Lopez at the American Music Video Awards, America’s Got Talent, and can be seen dancing with Lady Gaga in the MTV Video Awards. She has worked with prestigious artists and choreographers including assisting the Emmy award winning SYTYCD choreographer, Tessandra Chavez. She has also performed in the Equity production of Beauty and the Beast at Disney World as well as a high-kick dancer in Universal Studios.
            </x-staff-member>

            <x-staff-member
                name="Deanna Greist"
                image="/images/2026-faculty/deanna-greist.webp"
                modal-id="DeannaModal"
            >
                Deanna Greist grew up in South Florida and began her training at Jill Mallory Studio of Dance at the age of three. In high school, she trained at Donna Lee Studio of Dance and became an inaugural member of Expressions Dance Company where she was afforded the opportunity to work with nationally renowned choreographers, such as Rennie and Rhee Gold, Scott Fowler, and Debbie Dee. At the age of 18, Deanna became a member of The Young Americans where she benefitted from multiple national touring opportunities including working with and performing for the likes of Barbra Streisand, George Burns, and Shirley MacLaine to name a few.
                <br><br>
                Deanna has been a dance educator/choreographer in South Florida for more than 30 years and has spent three of those years on faculty at Encore Dance Theatre. She is a certified Acrobatics Arts Instructor, as well as a certified Acro Dance Teacher Association Adjudicator. Deanna is also a certified judge for the Miss America Organization and enjoys judging local competitions. She is excited to be back for another successful year at Encore Dance Theatre!
            </x-staff-member>

            <x-staff-member
                name="Luz Monica Guerrero"
                image="/images/2026-faculty/luz-monica-guerrero.webp"
                modal-id="LuzModal"
            >
                Luz Monica is a graduate in Performing Arts, with a specialty in Ballet, graduated with a Gold Degree from the Higher Institute of Art of Havana, postgraduate in Historical Dances and Dances of Character, of Elementary and Middle level in the Superior Institute of Art of Havana. With vast experience in teaching, teaching courses in Classical Technique, Character Dances, Point Techniques and Repertoire at various levels. With pedagogical, didactic, methodological and administrative tools to guarantee the integral development of schools and dance academies; special interest in teaching, vocational guidance and planning and organization of the artistic curriculum. Co-creator and administrator of the La Luz de la Danza Foundation. With skills for work under pressure, achievement orientation and high-performance capacity in tasks of responsibility and exigency. We are thrilled to have Luz Monica on faculty.
            </x-staff-member>





            <x-staff-member
                name="Noeah Jacobs"
                image="/images/2026-faculty/noeah-jacobs.webp"
                modal-id="NoeahModal"
            >
                Noeah Jacobs is from west palm beach Florida, is 28 years old and became a professional
                <br><br>
                Hip Hop Dancer/Choreographer at the age of 16.
                <br><br>
                He’s been in movies, music videos, world tours & commercials and has a lot of knowledge and experience in the industry.
                <br><br>
                He’s worked with artist such as Chris Brown, Cardi B, Dj Khaled, Don Omar, Marc Anthony, Bad Bunny, LIL BABY, ASAP ROCKY , Ricky Martin, Ozuna, J balvin, YG, Nicky jam, Bsmyth, Rick Ross, Daddy Yankee, Fabulous, Kodak Black and many more and has also worked with brands & networks & Brands such as ROLLINGLOUD, BET NETWORK, REDBULL LIFETIME, Nissan, Adidas, Bang Energy, Spotify, Macys, FashionNova and many more!
                <br><br>
                Noeah has taught students all around the world from young dancers all the way to professionals and brings in a fun energetic atmosphere to all classes!!
            </x-staff-member>

{{--            <x-staff-member--}}
{{--                name="Tori Jacobson"--}}
{{--                image="/images/tori-crop.jpeg"--}}
{{--                modal-id="ToriModal"--}}
{{--            >--}}
{{--                Tori began dancing at Encore when she was three years old. She was on the competition team where she trained in ballet, tap, jazz, acro and lyrical. Tori recently graduated with her bachelors degree in business management. We are delighted that Tori has come back home to EDT!--}}
{{--            </x-staff-member>--}}

{{--            <x-staff-member--}}
{{--                name="Jordan Elizabeth Long"--}}
{{--                image="/images/jordan.png"--}}
{{--                modal-id="JordanModal"--}}
{{--            >--}}
{{--                Jordan Elizabeth Long was born in Blacksburg, Virginia. She began her ballet training with Carol Crawford Smith and continued with Terri Post at the Southwest Virginia Ballet. In high school, she trained in South Florida with Magaly Suarez.--}}
{{--                <br><br>--}}
{{--                Upon completion of high school, she was invited to join the Dutch National Ballet as a demi-soloist. In 2010 she joined the Royal Swedish Ballet, where she was promoted to soloist. During her time in Europe, her repertoire included leading roles in The Nutcracker, Swan Lake, Giselle, and The Sleeping Beauty.--}}
{{--                <br><br>--}}
{{--                Jordan has been awarded the Gold Medal at the World Ballet Competition USA, been a finalist at the Shanghai International Ballet Competition, and was awarded the Louis Gallodier Prize at the Royal Swedish Ballet. She has appeared in galas and festivals in the USA, Dominican Republic, Russia, Romania, and Hong Kong.--}}
{{--                <br><br>--}}
{{--                In 2014, Jordan joined Miami City Ballet as a Soloist, and was promoted to Principal Soloist in 2023. With MCB, her repertoire has included leading roles in George Balanchine’s The Nutcracker (Sugar Plum Fairy, Dew Drop, Hot Chocolate, Coffee), A Midsummer Night’s Dream (Titania, Hippolyta), Jewels (Emeralds principal and Rubies tall girl), Giselle (Myrtha), and Serenade (Dark Angel), among many others.--}}
{{--                <br><br>--}}
{{--                Jordan holds a bachelor’s degree in Business Administration from Liberty University and an MBA from the University of Miami. We excited to have Miss Jordan on the EDT faculty.--}}
{{--            </x-staff-member>--}}

            <x-staff-member
                name="Natasha Madrigal"
                image="/images/2026-faculty/natasha-madrigal.webp"
                modal-id="NatashaModal"
            >
                Natasha grew up in Coral Springs, Florida. She started dancing at 4 years old and was a student at encore dance theater for 12 years. She was a part of the company team, training and competing in all dance styles. She has also had the opportunity to perform at the Miami Heat and Dolphins Halftime, Royal Caribbean Show, and Dance the Magic Disney Parade all with Encore. Natasha is currently a student at Nova Southeastern University, majoring in Entrepreneurship and minoring in dance. She has performed at NSU each semester in a variety of events. At 19 years old, she became a professional dancer for the NHL Florida Panthers. She continues to attend multiple dance workshops to better herself and proceed with her dance career in pro sports. Natasha is a proud alumni and is so excited to share her love for dance with her EDT family!
            </x-staff-member>

            <x-staff-member
                name="Priya Nair"
                image="/images/2026-faculty/priya-nair.webp"
                modal-id="PriyaNairModal"
            >
                Bio coming soon!
            </x-staff-member>

            <x-staff-member
                name="Shaelynn Padilla"
                image="/images/2026-faculty/shaelynn-padilla.webp"
                modal-id="ShaelynnModal"
            >
                Shaelynn began dancing at the age of four and found her dance home at Encore just a few years later. What started as a love for musical theatre quickly expanded into a passion for jazz and, most notably, hip hop—captivated by its power, energy, and expressive freedom. As her training progressed, Shaelynn became a dedicated member of Encore’s Competitive Company, where she not only grew as a performer but also forged lifelong friendships and unforgettable memories.
                <br><br>
                Her journey came full circle when she stepped into the role of assistant teacher, discovering a true love for mentoring and inspiring younger dancers. Now a graduate, Shaelynn is thrilled to continue her dance journey as an instructor at Encore. She looks forward to giving back to the studio that shaped her and sharing her creativity, energy, and enthusiasm with the next generation of dancers.
            </x-staff-member>

            <x-staff-member
                name="Kalanie Ramirez"
                image="/images/2026-faculty/kalanie-ramirez.webp"
                modal-id="KalanieModal"
            >
                Kalanie began her dance journey at just two years old at Dancing Plus, where she dedicated 15 years to training in a wide range of styles, including ballet, tap, jazz, ballroom, lyrical, hip hop, and acro. Her passion for dance extended beyond the studio, as she became an active member of her high school’s arts conservatory and proudly performed with the Somerset Pantherettes dance team.
                <br><br>
                Her commitment and talent led her to the professional stage, where she successfully auditioned for the NHL Florida Panthers dance team. As part of the first group to ever perform on the ice, Kalanie had the incredible honor of celebrating a Stanley Cup championship victory and participating in the team’s championship parade.
                <br><br>
                In addition to her dance career, Kalanie is pursuing a degree in Communication Sciences and Disorders at Nova Southeastern University, with aspirations of becoming a speech-language pathologist. She also works as a special education teacher at South Florida Autism Charter School.
            </x-staff-member>

            <x-staff-member
                name="Marlee Ramirez-Santana"
                image="/images/2026-faculty/marlee-ramirez-santana.webp"
                modal-id="MarleeModal"
            >
                Marlee has been a veteran of Encore Dance Theatre for 27 years. She has a Bachelors Degree in Exceptional Student Education with a Masters Degree in Educational Leadership. Marlee has a special talent to work with all levels. In her dance career she has performed with Ballet Met, The Power Rangers, and the Orange Bowl parade to name a few.
            </x-staff-member>





            <!-- start add 10 existing -->

            <x-staff-member
                name="Reyneris Reyes"
                image="/images/2026-faculty/reyneris-reyes.webp"
                modal-id="ReynerisModal"
            >
                Reyneris Reyes was born in Dimas-Mantua Pinar Del Rio, Cuba. He received his training at the Vocational School of Art in Pinar Del Rio and The National Ballet School in Havana. He received additional training at Cuballet summer dance program in Matanzas, Cuba, as well as with renowned teachers Ramona de Saa Bello, Berto Borges, Mabel Carillo, Adria Vélazquez, Magaly Suarez, Ana Julia Bermudez, Maria Cristina Alvarez, Josefina Mendez and others.
                <br><br>
                Reyes has danced for National Ballet of Cuba, Royal Winnipeg Ballet, Boston Ballet and he joined Miami City Ballet as a principal dancer in 2010. We are excited to have Mr. Reyes on faculty at EDT.
            </x-staff-member>

            <x-staff-member
                name="Alana Scheuerer"
                image="/images/2026-faculty/alana-scheuerer.webp"
                modal-id="AlanaModal"
            >
                Alana holds an M.A. in American Dance Studies from Florida State University. Growing up as an award winning competitive dancer in South Florida, she specializes in tap. Alana helped found and run FSU’s first tap dance team, Seminole Tap Troupe, competed with student-run competitive dance team Seminole Dance Force, and served as hospitality coordinator for Dance Marathon. Alana has experience with hosting cultural stages at art festivals, producing and voicing NBC Comcast commercials, hosting live radio, and teaching dance workshops. She holds a seat on Coral Springs Public Art Committee and currently serves as the 85th Anniversary Miss Broward County, with her community service initiative of TAP: Turn up Artistic Participation. She works full time operating special events at the Museum of Discovery Science in downtown Fort Lauderdale, having worked with brands such as LEGO, Publix, and Joe DiMaggio Children’s Hospital. In March 2023, she led plans and operations for the 8,000 attendee Visit Lauderdale Science Festival. She’s excited to join the EDT Family and share her love for tap!
            </x-staff-member>











            <x-staff-member
                name="Stacy Terry"
                image="/images/2026-faculty/stacy-terry.webp"
                modal-id="StacyModal"
            >
                Bio coming soon!
            </x-staff-member>

            <x-staff-member
                name="Emily Vernuccio"
                image="/images/2026-faculty/emily-vernuccio.webp"
                modal-id="EmilyVernuccioModal"
            >
                Bio coming soon!
            </x-staff-member>

            <x-staff-member
                name="Hailey Walsh"
                image="/images/2026-faculty/hailey-walsh.webp"
                modal-id="HaileyModal"
            >
                Hailey grew up in Northeast Ohio, training extensively in all styles of competitive dance. In high school, she moved to Denver, Colorado, where she joined The Silhouettes, who earned 2nd place on America’s Got Talent. Hailey later danced professionally in Hollywood and Las Vegas, performing in shows at Caesar’s Palace. Her career has taken her across the country and internationally, with performances for renowned artists like LeAnn Rimes and major brands such as Coca-Cola. After high school, Hailey attended Florida State University, where she was a proud member of the FSU Golden Girls.
            </x-staff-member>

            <x-staff-member
                name="Rae Wilcoxson"
                image="/images/2026-faculty/rae-wilcoxson.webp"
                modal-id="RaeWilcoxsonModal"
            >
                Bio coming soon!
            </x-staff-member>

            <!-- finish add 10 existing -->



        </div>
    </div>


@endsection
