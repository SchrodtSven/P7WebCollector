<?php

declare(strict_types=1);
/**
 * Class with methods for generation of textual (random) example data - to be used mainly within unit tests
 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7WebCollector
 * @package P7WebCollector
 * @version 0.1
 * @since 2022-12-30
 */

namespace P7WebCollector\Data\Mock;

use P7WebCollector\Type\ArrayClass;

class Words
{
    protected static array $firstNames = [
        'Abba', 'Abbott', 'Abe', 'Abram', 'Adda', 'Addy', 'Adelaide', 'Adelaide', 'Adolphus', 'Adria', 'Adrianna',
        'Adrianne', 'Adrien', 'Aeriell', 'Aggi', 'Aidan', 'Ainslee', 'Ainslie', 'Aksel', 'Alair', 'Alanah', 'Alane',
        'Alberto', 'Albrecht', 'Aldis', 'Alec', 'Alec', 'Aleksandr', 'Alene', 'Alf', 'Alfie', 'Alicea', 'Alis',
        'Alla', 'Allie', 'Allie', 'Allina', 'Allissa', 'Allissa', 'Allyce', 'Allyn', 'Aloise', 'Aloysia', 'Aloysia',
        'Alphonse', 'Alphonse', 'Althea', 'Ambrosius', 'Amerigo', 'Amitie', 'Amye', 'Anatollo', 'Andonis', 'Andre',
        'Andrey', 'Andrus', 'Anet', 'Angel', 'Angelina', 'Angeline', 'Angus', 'Anica', 'Annabelle', 'Annmaria',
        'Annora', 'Anthia', 'Antonin', 'Antonino', 'Antons', 'Antony', 'Arabel', 'Arabela', 'Arch', 'Archer', 'Archy',
        'Ardis', 'Ariela', 'Arin', 'Arlen', 'Arlena', 'Arlin', 'Arluene', 'Arney', 'Artemis', 'Arther', 'Arty', 'Ase',
        'Ashil', 'Ashley', 'Astrix', 'Aubert', 'Auberta', 'Aubry', 'Augustus', 'Aura', 'Aurilia', 'Aurthur', 'Averil',
        'Avrit', 'Balduin', 'Bale', 'Barbabas', 'Barbabas', 'Barbabra', 'Barbe', 'Bard', 'Bard', 'Barrett', 'Barron',
        'Bartel', 'Barton', 'Basile', 'Bathsheba', 'Bealle', 'Beatrice', 'Beck', 'Becka', 'Becky', 'Belia', 'Bell',
        'Benedicto', 'Beniamino', 'Benoite', 'Benton', 'Bernadene', 'Berri', 'Bertha', 'Berti', 'Beverly', 'Bevin',
        'Bili', 'Billie', 'Birgit', 'Bjorn', 'Blair', 'Blayne', 'Blondy', 'Bobine', 'Bogart', 'Bondon', 'Bonni',
        'Bonny', 'Booth', 'Bordy', 'Borg', 'Brady', 'Bram', 'Brendon', 'Brendon', 'Bronnie', 'Bronny', 'Brooke',
        'Brynna', 'Bud', 'Budd', 'Buiron', 'Burnaby', 'Burr', 'Caldwell', 'Calla', 'Callida', 'Callida', 'Cally',
        'Camel', 'Carce', 'Care', 'Carey', 'Carie', 'Carina', 'Carlyle', 'Carmella', 'Carmelle', 'Carny', 'Carolina',
        'Carolyn', 'Caron', 'Caron', 'Carrissa', 'Cass', 'Cathy', 'Catriona', 'Caty', 'Cchaddie', 'Celestyn',
        'Celestyna', 'Celie', 'Celinda', 'Celka', 'Chaddie', 'Chaddy', 'Chandal', 'Charlton', 'Charmine', 'Charo',
        'Chase', 'Cheston', 'Chevalier', 'Chevalier', 'Chris', 'Christalle', 'Christen', 'Christiana', 'Christiano',
        'Christoph', 'Cicely', 'Cinnamon', 'Clarinda', 'Claudian', 'Claudianus', 'Clay', 'Clayton', 'Clea',
        'Cleavland', 'Clementius', 'Clemmy', 'Cleve', 'Cloris', 'Cloris', 'Codi', 'Codie', 'Cody', 'Colby', 'Cole',
        'Collie', 'Con', 'Conchita', 'Connie', 'Constantine', 'Constantine', 'Cooper', 'Corabel', 'Coral', 'Coral',
        'Coraline', 'Cordelia', 'Corly', 'Cornela', 'Corny', 'Corny', 'Correy', 'Cosmo', 'Courtnay', 'Cristiano',
        'Cristy', 'Curry', 'Curtice', 'Cyrille', 'D\'arcy', 'Dael', 'Dael', 'Daffie', 'Dag', 'Dagny', 'Dalli',
        'Damita', 'Dani', 'Danica', 'Danielle', 'Dannye', 'Danya', 'Darby', 'Darcy', 'Daria', 'Darn', 'Darnall',
        'Darrelle', 'Darryl', 'Darwin', 'Dasi', 'Dave', 'Daven', 'De', 'Debera', 'Deedee', 'Deena', 'Deerdre',
        'Delbert', 'Demetri', 'Denis', 'Denna', 'Dennis', 'Der', 'Derrik', 'Derril', 'Desiree', 'Devi', 'Devin',
        'Devina', 'Devinne', 'Devon', 'De witt', 'Dewitt', 'Dewitt', 'De witt', 'Dianne', 'Didi', 'Dill', 'Dimitry',
        'Dion', 'Doe', 'Dollie', 'Dolly', 'Doralynne', 'Dorian', 'Dorian', 'Dorie', 'Doro', 'Dorothy', 'Dorris',
        'Dorthy', 'Dory', 'Doy', 'Doyle', 'Dru', 'Druci', 'Dunc', 'Dusty', 'Dyna', 'Eadmund', 'Ealasaid', 'Earlie',
        'Ebenezer', 'Edan', 'Eddy', 'Ede', 'Edeline', 'Edlin', 'Eduardo', 'Edvard', 'Edwina', 'Eileen', 'Eleanora',
        'Eleonore', 'Elicia', 'Ellary', 'Elli', 'Ellissa', 'Elmer', 'Elsa', 'Elsbeth', 'Elsi', 'Elsie', 'Elvira',
        'Elwood', 'Elyse', 'Ema', 'Emalee', 'Emalia', 'Emelina', 'Emelyne', 'Emmalee', 'Engelbert', 'Engracia',
        'Enrique', 'Erasmus', 'Erastus', 'Eric', 'Ericka', 'Erinna', 'Ermina', 'Etan', 'Ethan', 'Ethelind', 'Etta',
        'Eugenie', 'Eunice', 'Ev', 'Evan', 'Evangelia', 'Evelin', 'Eveline', 'Evy', 'Ewen', 'Ezequiel', 'Fabe',
        'Fanchette', 'Fanechka', 'Faunie', 'Fayre', 'Felecia', 'Felizio', 'Ferrel', 'Fidela', 'Fidelio', 'Fidelio',
        'Fifi', 'Fifine', 'Filide', 'Filippo', 'Findley', 'Florida', 'Florina', 'Florry', 'Flossi', 'Forrester',
        'Francesca', 'Fransisco', 'Frasier', 'Fred', 'Freda', 'Freeland', 'Gabrila', 'Gael', 'Gage', 'Gan',
        'Gardiner', 'Garek', 'Gaspard', 'Gaston', 'Gaven', 'Gayler', 'Gaylor', 'Gaylord', 'Gennie', 'Genvieve',
        'George', 'George', 'Georgiana', 'Gerard', 'Gerik', 'Gerik', 'Gerrie', 'Gerrilee', 'Gertruda', 'Gib', 'Gibb',
        'Giffard', 'Gilburt', 'Gilda', 'Gina', 'Ginnifer', 'Gino', 'Giorgio', 'Giovanna', 'Giovanni', 'Giuseppe',
        'Giustina', 'Glyn', 'Glyn', 'Godart', 'Godfree', 'Grayce', 'Gregg', 'Gretta', 'Griffy', 'Grissel', 'Gunter',
        'Guthry', 'Gwendolin', 'Gwynne', 'Gypsy', 'Hadleigh', 'Hadrian', 'Hailee', 'Haley', 'Hamil', 'Happy',
        'Harcourt', 'Harland', 'Harris', 'Hart', 'Hasty', 'Hatti', 'Hayes', 'Haze', 'Heather', 'Heda', 'Heddi',
        'Hedy', 'Hendrick', 'Henri', 'Henryetta', 'Hercule', 'Herman', 'Hermia', 'Hermon', 'Herve', 'Hewitt',
        'Hilarius', 'Hillard', 'Hilliary', 'Hobart', 'Hodge', 'Holly-anne', 'Hollyanne', 'Homerus', 'Hube',
        'Humfried', 'Hurley', 'Hy', 'Ileana', 'Imogene', 'Ingmar', 'Ingmar', 'Iosep', 'Ira', 'Isaac', 'Issiah',
        'Ivar', 'Jae', 'Jana', 'Janeva', 'Jarred', 'Jarrid', 'Jayson', 'Jeane', 'Jeanette', 'Jeanie', 'Jeannie',
        'Jedidiah', 'Jeffy', 'Jenilee', 'Jenn', 'Jenni', 'Jennilee', 'Jephthah', 'Jerrine', 'Jessey', 'Jimmy',
        'Jo-ann', 'Joanna', 'Job', 'Jocko', 'Jodee', 'Jodie', 'Johnette', 'Jonathan', 'Jonathon', 'Jordon', 'Jorry',
        'Josee', 'Joseph', 'Jourdan', 'Joyce', 'Judas', 'Judas', 'Judie', 'Julienne', 'Julienne', 'Juline', 'Justine',
        'Justis', 'Kally', 'Kandace', 'Karel', 'Karl', 'Karlene', 'Karlie', 'Karlie', 'Karna', 'Karoly', 'Kary',
        'Kasper', 'Kassi', 'Kassia', 'Kata', 'Katharina', 'Katharine', 'Katherine', 'Kathlin', 'Katusha', 'Katya',
        'Keeley', 'Kelli', 'Kendra', 'Kent', 'Kessiah', 'Ketty', 'Kev', 'Kev', 'Kienan', 'Kim', 'Kim', 'Kimbra',
        'Kimmi', 'Kippie', 'Kirsten', 'Kirsten', 'Kit', 'Koo', 'Kris', 'Kristel', 'Kristina', 'Kristo', 'Kristoffer',
        'Krystle', 'Kyle', 'Kynthia', 'Laetitia', 'Lamond', 'Lance', 'Lanni', 'Larisa', 'Laurie', 'Lazare', 'Lazaro',
        'Lea', 'Leann', 'Lee', 'Leena', 'Leighton', 'Leila', 'Leon', 'Leonid', 'Lesya', 'Letisha', 'Letizia',
        'Lettie', 'Levi', 'Lewes', 'Lianna', 'Licha', 'Liliane', 'Liliane', 'Lilli', 'Lind', 'Lind', 'Lindsey',
        'Linn', 'Lionello', 'Lisabeth', 'Lise', 'Lisetta', 'Llewellyn', 'Llewellyn', 'Lock', 'Lockwood', 'Loella',
        'Loleta', 'Loretta', 'Loria', 'Lorrin', 'Lothaire', 'Louella', 'Louie', 'Loydie', 'Luci', 'Lucius',
        'Ludovico', 'Luke', 'Lyman', 'Lyssa', 'Mabel', 'Madonna', 'Magnum', 'Malanie', 'Malissia', 'Malory',
        'Malvina', 'Mannie', 'Mano', 'Marcela', 'Marcella', 'Marchelle', 'Marcia', 'Margaret', 'Margaret', 'Margret',
        'Mariann', 'Marlon', 'Marlow', 'Marnia', 'Martino', 'Marven', 'Marven', 'Marybelle', 'Marybeth', 'Marylee',
        'Marylou', 'Matt', 'Matthaeus', 'Maurine', 'Maye', 'Megan', 'Melicent', 'Meredithe', 'Merissa', 'Merna',
        'Merrielle', 'Merrilee', 'Merrily', 'Merrily', 'Merrily', 'Merv', 'Meryl', 'Meryl', 'Michal', 'Michal',
        'Michelle', 'Mikey', 'Mikkel', 'Mikol', 'Mill', 'Millard', 'Milly', 'Mirabelle', 'Mirelle', 'Mitchael',
        'Modestine', 'Moll', 'Morena', 'Morgana', 'Morganica', 'Morse', 'Mort', 'Mortie', 'Morton', 'Myrlene',
        'Myrlene', 'Nancie', 'Nanice', 'Natale', 'Natalina', 'Natassia', 'Nathanael', 'Nathanial', 'Ned', 'Neely',
        'Nelli', 'Nev', 'Nevile', 'Nevsa', 'Nevsa', 'Nicki', 'Nicolette', 'Nigel', 'Nikaniki', 'Nikolai', 'Ninnetta',
        'Nisse', 'Noami', 'Nobe', 'Noe', 'Noland', 'Nonah', 'Nonna', 'Norma', 'Normand', 'Norry', 'Northrup',
        'Northrup', 'Nye', 'Obadiah', 'Obidiah', 'Ofilia', 'Ogden', 'Olav', 'Oliy', 'Olympie', 'Ophelie', 'Ora',
        'Orel', 'Orion', 'Orion', 'Orsa', 'Orsola', 'Orville', 'Otes', 'Ozzie', 'Packston', 'Paddie', 'Paddy',
        'Padgett', 'Padriac', 'Page', 'Page', 'Paige', 'Paige', 'Pansy', 'Papageno', 'Park', 'Pasquale', 'Paule',
        'Paxton', 'Peggi', 'Penn', 'Penn', 'Penny', 'Pepita', 'Perla', 'Pernell', 'Perri', 'Petey', 'Peyter',
        'Peyter', 'Philipa', 'Pier', 'Pincus', 'Pip', 'Piper', 'Pooh', 'Porter', 'Quintus', 'Rabbi', 'Rabi', 'Raeann',
        'Raf', 'Rainer', 'Ralf', 'Ramsey', 'Rana', 'Rana', 'Ranna', 'Raquela', 'Ray', 'Ray', 'Raychel', 'Read',
        'Reade', 'Reagen', 'Regan', 'Reginauld', 'Rennie', 'Reube', 'Reube', 'Richie', 'Rickard', 'Rickie', 'Rikki',
        'Riobard', 'Roanna', 'Robby', 'Robers', 'Robinson', 'Robyn', 'Rochelle', 'Rod', 'Roderigo', 'Rolph', 'Romain',
        'Roselia', 'Rosie', 'Rosmunda', 'Rossie', 'Rossy', 'Royall', 'Roze', 'Rozele', 'Rubie', 'Rudiger', 'Rudiger',
        'Ruperto', 'Ruprecht', 'Rurik', 'Rutger', 'Ruthi', 'Ryun', 'Sal', 'Saleem', 'Saleem', 'Sandie', 'Sanson',
        'Sapphire', 'Sarah', 'Sarena', 'Sargent', 'Saundra', 'Saxe', 'Saxon', 'Say', 'Say', 'Say', 'Sayer', 'Sayres',
        'Scarlet', 'Scot', 'Scott', 'Selene', 'Seymour', 'Shaina', 'Shalom', 'Shana', 'Shantee', 'Sharona', 'Shawna',
        'Shaylah', 'Shela', 'Shelley', 'Shep', 'Sheri', 'Sherie', 'Shirlee', 'Shirline', 'Shoshana', 'Siana',
        'Sibelle', 'Siegfried', 'Silvan', 'Silvano', 'Simmonds', 'Simone', 'Skelly', 'Skippy', 'Sonia', 'Sonnnie',
        'Sonny', 'Sorcha', 'Staci', 'Stafani', 'Stanwood', 'Starlin', 'Stavros', 'Stearn', 'Stefa', 'Stephi',
        'Stevena', 'Stillmann', 'Stormy', 'Susann', 'Susanna', 'Suzy', 'Sven', 'Sydney', 'Sylvester', 'Tadeo', 'Tami',
        'Tami', 'Tawsha', 'Teodoor', 'Terencio', 'Teresa', 'Terrell', 'Terrence', 'Thatcher', 'Theobald', 'Theodor',
        'Thurston', 'Tiff', 'Tiffi', 'Titus', 'Tobin', 'Toddie', 'Toddy', 'Tom', 'Tom', 'Tony', 'Torin', 'Traci',
        'Traver', 'Tremain', 'Trenna', 'Trixy', 'Tucker', 'Twila', 'Twila', 'Ulises', 'Uriah', 'Uriel', 'Ursa',
        'Valentia', 'Valentino', 'Valery', 'Valma', 'Vance', 'Venus', 'Vergil', 'Verne', 'Verney', 'Vikki', 'Vinni',
        'Viole', 'Viviyan', 'Vladimir', 'Vonni', 'Wade', 'Waldo', 'Wallas', 'Waneta', 'Warner', 'Waverley', 'Waverly',
        'Wayne', 'Webster', 'Welbie', 'Wendye', 'Wenona', 'Wilden', 'Wilhelm', 'Willy', 'Willy', 'Wilma', 'Winifred',
        'Winnie', 'Woodrow', 'Wright', 'Wyatt', 'Wyndham', 'Xavier', 'Xenia', 'Yelena', 'Yoshiko', 'Yul', 'Yuri',
        'Yvonne', 'Zachary', 'Zak', 'Zelda', 'Zerk', 'Zora', 'Zsazsa'
    ];


    protected static array $lorem = [
        'illo', 'modi', 'Quis', 'velit,', 'quisquam', 'Nemo', 'adipisci', 'quam', 'voluptatem', 'ullam', 'ea', 'quo', 'vitae', 'Sed',
        'totam', 'sit', 'ipsum', 'Neque', 'nesciunt.', 'veniam,', 'aut', 'laboriosam,', 'esse', 'exercitationem', 'sed', 'architecto',
        'quia', 'amet,', 'minima', 'et', 'dolorem', 'dolore', 'sequi', 'sit', 'ut', 'eaque', 'ipsam', 'Ut', 'beatae', 'fugit,', 'quia',
        'quia', 'enim', 'ratione', 'veritatis', 'explicabo.', 'commodi', 'quaerat', 'aliquid', 'dolorem', 'nihil', 'ex', 'consequuntur',
        'voluptatem', 'molestiae', 'et', 'sed', 'fugiat', 'consectetur,', 'voluptas', 'in', 'iste', 'voluptas', 'qui', 'eum', 'ab', 'quis',
        'sunt', 'autem', 'iure', 'tempora', 'dicta', 'pariatur?', 'quasi', 'consequatur?', 'odit', 'ea', 'eius', 'natus', 'dolores', 'vel',
        'porro', 'quia', 'voluptatem.', 'enim', 'qui', 'eum', 'accusantium', 'quae', 'laudantium,', 'velit', 'sit', 'numquam', 'perspiciatis',
        'unde', 'labore', 'aspernatur', 'qui', 'voluptatem', 'omnis', 'ipsa', 'consequatur,', 'doloremque', 'eos', 'qui', 'incidunt',
        'reprehenderit', 'nisi', 'nostrum', 'nulla', 'rem', 'magnam', 'ut', 'voluptate', 'illum', 'aut', 'ad', 'aliquam', 'corporis', 'vel',
        'non', 'aperiam,', 'dolor', 'inventore', 'error', 'ut', 'est,', 'suscipit', 'magni'
    ];

    protected array $lastNames = [
        'Abade', 'Abells', 'Adamczyk', 'Adamov', 'Adel', 'Adelberg', 'Ainger', 'Akram', 'Albrecht', 'Alejo',
        'Alexandrou', 'Allix', 'Allmen', 'Almey', 'Alvar', 'Ambrogiotti', 'Ambrosi', 'Andries', 'Andriveaux',
        'Ansill', 'Antat', 'Armfield', 'Arnfield', 'Arthur', 'Ashe', 'Ashling', 'Ashurst', 'Ashwell', 'Askey',
        'Athowe', 'Atterley', 'Auden', 'August', 'Augustus', 'Auletta', 'Averay', 'Axten', 'Ayree', 'Bacon', 'Baddoe',
        'Balmer', 'Balsom', 'Bampforth', 'Bampforth', 'Banasik', 'Bance', 'Baniard', 'Banner', 'Bantham', 'Barnsdale',
        'Bartlosz', 'Bartolozzi', 'Bartoszinski', 'Bartzen', 'Bassick', 'Battany', 'Beautyman', 'Beedom', 'Behan',
        'Beininck', 'Ben-Aharon', 'Benedicto', 'Bensley', 'Bent', 'Bergeau', 'Bernardos', 'Bernardos', 'Bernat',
        'Berthod', 'Berthot', 'Berzin', 'Bew', 'Bewly', 'Bier', 'Billo', 'Bilston', 'Bim', 'Birchwood', 'Blakebrough',
        'Blakey', 'Blance', 'Blanch', 'Blankley', 'Blatchford', 'Blazhevich', 'Blenkinsop', 'Blest', 'Bloxland',
        'Board', 'Boissieux', 'Boken', 'Boken', 'Boland', 'Bolesma', 'Bomb', 'Bonar', 'Boothroyd', 'Boraston',
        'Borrill', 'Bosse', 'Botham', 'Bouller', 'Boultwood', 'Boutwell', 'Bowcock', 'Bown', 'Boxe', 'Bramstom',
        'Bratton', 'Braunter', 'Brayshaw', 'Bretelle', 'Breznovic', 'Bricket', 'Bridgestock', 'Brissard', 'Brobeck',
        'Brower', 'Brown', 'Brownsell', 'Brownsey', 'Bruyett', 'Brydone', 'Buckam', 'Buckthorpe', 'Budgeon', 'Bunkle',
        'Burchfield', 'Burhill', 'Burnet', 'Burnyeat', 'Burt', 'Burtt', 'Butteris', 'Buttrey', 'Cabotto', 'Caddies',
        'Cake', 'Caldow', 'Callcott', 'Caltera', 'Calvie', 'Camel', 'Camp', 'Camplen', 'Cantillion', 'Capel',
        'Capeloff', 'Capper', 'Cardello', 'Cardenosa', 'Carlisi', 'Carrett', 'Caslin', 'Castiglioni', 'Castleman',
        'Caswell', 'Catford', 'Cattanach', 'Cellone', 'Cerie', 'Chamley', 'Chasson', 'Chateau', 'Chatelet', 'Chelley',
        'Chiles', 'Chitham', 'Choppin', 'Chrisp', 'Churchouse', 'Cisson', 'Civitillo', 'Clac', 'Claesens', 'Cliss',
        'Cluderay', 'Coggell', 'Cohr', 'Coldman', 'Colgan', 'Coller', 'Collett', 'Collingwood', 'Colnet', 'Colquete',
        'Colter', 'Comfort', 'Comi', 'Comolli', 'Condie', 'Connold', 'Connolly', 'Considine', 'Copcott', 'Coram',
        'Corcut', 'Cordelet', 'Corderoy', 'Cosgreave', 'Cosham', 'Cotterel', 'Cottham', 'Cottis', 'Cousen',
        'Covendon', 'Coventry', 'Cowmeadow', 'Coyle', 'Craig', 'Cramb', 'Crane', 'Creaney', 'Creaven', 'Creebo',
        'Cremins', 'Crichmere', 'Crowch', 'Crowcum', 'Cuphus', 'Curado', 'Curneen', 'Cursons', 'D\'Antuoni', 'Daborne',
        'Danneil', 'Darell', 'Darthe', 'Dautry', 'Daventry', 'Davidovici', 'Davsley', 'Dawidowitsch', 'Dawidowsky',
        'De Blasi', 'De Bruijn', 'de Clercq', 'de Clerq', 'De Cruz', 'De Francisci', 'Dellenbroker', 'De Meyer', 'De Mico', 
        'Demougeot', 'Derrell', 'Derycot', 'Desesquelle', 'Devenish', 'Diament', 'Dibbs', 'Dicte', 'Digby',
        'Dillingstone', 'Di Lucia', 'Dilworth', 'Ditts', 'Ditty', 'Dmitrienko', 'Dodell', 'Doerffer', 'Dohmann',
        'Doley', 'Dommett', 'Doncom', 'Donlon', 'Donnison', 'Dooney', 'Dorton', 'Dowles', 'Downie', 'Draxford',
        'Draycott', 'Drew', 'Drewes', 'Drewett', 'Drinan', 'Dryburgh', 'Duckit', 'Duffin', 'Duffitt', 'Dukesbury',
        'Duligal', 'Dunniom', 'Dunnion', 'Du Plantier', 'Duquesnay', 'Durno', 'Duthy', 'Dybbe', 'Eate', 'Ebbutt',
        'Eckery', 'Edelmann', 'Edens', 'Edland', 'Edmand', 'Eggers', 'Elmore', 'Emblen', 'Emmines', 'Emmott',
        'Ennever', 'Epgrave', 'Esland', 'Esom', 'Espley', 'Etienne', 'Ettles', 'Evelyn', 'Everest', 'Everwin',
        'Evitt', 'Ewells', 'Ewen', 'Fairn', 'Fantone', 'Farbrace', 'Farfoot', 'Fayer', 'Fend', 'Fennessy', 'Ferens',
        'Ferran', 'Ferriby', 'Ficken', 'Fildery', 'Files', 'Filppetti', 'Filppetti', 'Filson', 'Filyukov', 'Finn',
        'Finnigan', 'Fitzjohn', 'Flemmich', 'Flemming', 'Floyd', 'Follen', 'Folomin', 'Foort', 'Foreman',
        'Forrington', 'Forsdyke', 'Foskett', 'Fowley', 'Frankham', 'Franseco', 'Fryatt', 'Fulford', 'Fullicks',
        'Furmenger', 'Gagg', 'Gale', 'Gannon', 'Garard', 'Gaydon', 'Geely', 'Gell', 'Gellan', 'Georgeot', 'Geydon',
        'Ghilks', 'Gibbard', 'Gilderoy', 'Gilstoun', 'Gingold', 'Girardoni', 'Gitsham', 'Glayzer', 'Glazzard',
        'Glusby', 'Golda', 'Goodding', 'Goodge', 'Goodliff', 'Gorler', 'Gorling', 'Gossington', 'Gourley', 'Greenset',
        'Greensides', 'Grenkov', 'Griffithe', 'Grissett', 'Grooby', 'Growy', 'Grzeskowski', 'Guerrieri', 'Gummie',
        'Gyurko', 'Hachard', 'Haddon', 'Hadrill', 'Haggett', 'Hague', 'Halbard', 'Haliday', 'Hallewell', 'Hambleton',
        'Hammel', 'Hammond', 'Hanlin', 'Harbidge', 'Harbottle', 'Hardacre', 'Hardisty', 'Hargey', 'Harpur', 'Harral',
        'Hartegan', 'Hartigan', 'Hartles', 'Hartropp', 'Haslegrave', 'Hassey', 'Hatfull', 'Hatherley', 'Haughey',
        'Hawton', 'Heathcoat', 'Hellens', 'Henriet', 'Hillan', 'Hirtz', 'Holliar', 'Holwell', 'Horder', 'Horney',
        'Hosten', 'Hover', 'Howels', 'Howson', 'Hubbuck', 'Hudleston', 'Hughland', 'Hullock', 'Humbell', 'Hurst',
        'Huske', 'Hussell', 'Hyde-Chambers', 'Ingall', 'Inkles', 'Iremonger', 'Isakov', 'Ivanchikov', 'Ivanusyev',
        'Iwanowski', 'Jack', 'Jacobs', 'Jandl', 'Janzen', 'Jaulme', 'Jeandillou', 'Jeffries', 'Jerisch', 'Jewers',
        'Jimmison', 'Jobe', 'Jonin', 'Josephoff', 'Josilevich', 'Joslow', 'Josum', 'Jouanny', 'Juan', 'Judron',
        'Juppe', 'Kalinsky', 'Kausche', 'Kayes', 'Keelan', 'Keer', 'Keher', 'Keighley', 'Keighley', 'Kelk',
        'Kelleway', 'Kelsow', 'Kemston', 'Kettell', 'Kibel', 'Kiefer', 'Killingworth', 'Kimber', 'Kingaby',
        'Kingswell', 'Kinnerley', 'Kissack', 'Kitching', 'Kither', 'Kither', 'Klaffs', 'Klambt', 'Kliemke', 'Klima',
        'Klimowicz', 'Klimpke', 'Klosser', 'Kneal', 'Knudsen', 'Kobiera', 'Kolczynski', 'Korb', 'Krinks',
        'Krzyzanowski', 'Kubica', 'Kulis', 'Kyle', 'La Batie', 'Lacey', 'Ladlow', 'Lafee', 'Lages', 'Lakes',
        'Lamblot', 'Lambrechts', 'Laminman', 'Lamperd', 'Lamshead', 'Langstone', 'La Padula', 'Lapere', 'Larenson',
        'Lashford', 'Lasslett', 'Lasslett', 'Lattimore', 'Laugherane', 'Laurence', 'Laurisch', 'Lavell', 'Lawling',
        'Leadstone', 'Leare', 'Le Blanc', 'Leedal', 'Leggis', 'Leguey', 'Lempke', 'Lenton', 'Lesaunier', 'Lile',
        'Lillee', 'Lloyds', 'Loakes', 'Lodwick', 'Lofty', 'Longfoot', 'Longley', 'Longstaffe', 'Longworth', 'Louedey',
        'Loyd', 'Luckes', 'Lummus', 'Lyard', 'MacCague', 'MacCaughey', 'MacCome', 'MacCurley', 'MacDavitt',
        'MacFadzan', 'MacGillicuddy', 'MacGregor', 'MacKain', 'Mackney', 'Macvain', 'Maestrini', 'Maharg',
        'Maidstone', 'Makepeace', 'Male', 'Mallon', 'Manilove', 'Mantha', 'Marcus', 'Marjot', 'Marl', 'Marran',
        'Marshal', 'Marshalleck', 'Martinon', 'Mary', 'Mate', 'Matieu', 'Matskiv', 'Matthews', 'Matthis', 'Matuszak',
        'Matyushonok', 'Maudson', 'McAdam', 'McAdam', 'McAlinion', 'McBrady', 'McBrearty', 'McCoid', 'McCray',
        'McCullen', 'McDermott-Row', 'McDunlevy', 'McFie', 'McGairl', 'McGlaud', 'McKea', 'McLachlan', 'McLarens',
        'McNamee', 'McPeeters', 'McQuorkell', 'McVie', 'Mealiffe', 'Mease', 'Meggison', 'Mellanby', 'Melluish',
        'Metterick', 'Mettetal', 'Midden', 'Mildenhall', 'Minifie', 'Misson', 'Mitchell', 'Moehler', 'Moffet',
        'Mogenot', 'Molan', 'Monks', 'Monshall', 'Monteaux', 'Montel', 'Morad', 'Morrice', 'Mortell', 'Moulin',
        'Mowett', 'Muckloe', 'Mularkey', 'Mulhill', 'Mumbray', 'Murley', 'Murrells', 'Muskett', 'Najafian',
        'Narducci', 'Narraway', 'Nealey', 'Nehlsen', 'Nell', 'Neubigin', 'Newbury', 'Nibley', 'Niess', 'Nipper',
        'Noddings', 'Norquoy', 'Nowill', 'Nursey', 'Nuttey', 'O\' Culligan', 'O\'dell', 'O\'Dogherty', 'O\'Duilleain',
        'O\'Fearguise', 'O\'Lagen', 'Oakwood', 'Offord', 'Ogg', 'Ogilvy', 'Oldacre', 'Oliveti', 'Ong', 'Ortler',
        'Osbourn', 'Osbourne', 'Osmant', 'Oswal', 'Oultram', 'Overil', 'Ovize', 'Oxbe', 'Oxe', 'Oxtiby', 'Pacht',
        'Padginton', 'Paris', 'Parnell', 'Pasek', 'Pastor', 'Patesel', 'Patington', 'Patron', 'Pattingson', 'Pauler',
        'Paulet', 'Paulo', 'Pauly', 'Pavlovic', 'Pawlett', 'Paynes', 'Peirce', 'Pellatt', 'Pennetti', 'Pennino',
        'Pepon', 'Perico', 'Perllman', 'Perone', 'Perrone', 'Peschke', 'Petherick', 'Pexton', 'Pfertner', 'Phidgin',
        'Philipet', 'Phillins', 'Pickavant', 'Pickston', 'Pidgin', 'Pierse', 'Pietruschka', 'Pietrzak', 'Pignon',
        'Pikett', 'Pinkney', 'Pinks', 'Plait', 'Planque', 'Platt', 'Ponton', 'Poone', 'Postgate', 'Pounder',
        'Poundford', 'Powderham', 'Powling', 'Poyser', 'Prantl', 'Pressdee', 'Prestige', 'Priest', 'Priest',
        'Pritchitt', 'Pughe', 'Pusey', 'Quantrell', 'Quene', 'Radborne', 'Ramel', 'Ramos', 'Rance', 'Rapinett',
        'Rasch', 'Rasher', 'Rathbone', 'Rebanks', 'Redholes', 'Redmain', 'Redpath', 'Regorz', 'Reimer', 'Remer',
        'Reneke', 'Retchless', 'Retchless', 'Ridesdale', 'Ridgeway', 'Riggott', 'Rixon', 'Roberds', 'Robertet',
        'Roden', 'Rodgerson', 'Romao', 'Romke', 'Ronci', 'Roobottom', 'Rookledge', 'Rookledge', 'Rookwell', 'Rops',
        'Rosone', 'Rottgers', 'Royall', 'Royston', 'Rubes', 'Rubinchik', 'Rudderham', 'Ruseworth', 'Ryding', 'Safont',
        'Sains', 'Sainsbury-Brown', 'Salvatore', 'Salzberg', 'Sambedge', 'Santacrole', 'Santarelli', 'Sarge',
        'Sargison', 'Scholling', 'Scini', 'Scottrell', 'Scranedge', 'Scraney', 'Sears', 'Secretan', 'Sedgeman',
        'Seeney', 'Seine', 'Self', 'Self', 'Selvester', 'Selway', 'Semerad', 'Semon', 'Sennett', 'Settle', 'Seymer',
        'Shanahan', 'Shankster', 'Sharphurst', 'Sharratt', 'Shekle', 'Shelmardine', 'Shelvey', 'Sherlaw', 'Shevlan',
        'Shevlane', 'Shiels', 'Shillan', 'Shillom', 'Shippam', 'Shooter', 'Shorte', 'Shotboulte', 'Shurman',
        'Shurrocks', 'Sibbald', 'Sibbson', 'Siebart', 'Silkston', 'Singleton', 'Sircombe', 'Sivyer', 'Skacel',
        'Skarr', 'Skeels', 'Skinn', 'Skull', 'Skyme', 'Slainey', 'Slark', 'Slatcher', 'Smerdon', 'Smitton', 'Smullen',
        'Soeiro', 'Soigne', 'Sokale', 'Sorton', 'Sotworth', 'Sowte', 'Spary', 'Spaughton', 'Spearman', 'Spencer',
        'Spight', 'Spratt', 'Sproat', 'Squier', 'St. Quintin', 'Stallion', 'Stansbie', 'Steeples', 'Stivani',
        'Storks', 'Stowgill', 'Stowte', 'Stretton', 'Strooband', 'Strotone', 'Stubbes', 'Sturr', 'Stuther', 'Sudran',
        'Summerson', 'Sutliff', 'Swanton', 'Swedeland', 'Swindells', 'Swynfen', 'Sykes', 'Tapton', 'Tatton', 'Taw',
        'Taylerson', 'Tennock', 'Tetford', 'Thaller', 'Thorp', 'Threadgould', 'Thurlow', 'Thurske', 'Thurstance',
        'Tine', 'Tine', 'Tinner', 'Todman', 'Tolomio', 'Tomisch', 'Tompkinson', 'Tonna', 'Tookill', 'Torregiani',
        'Totaro', 'Tovey', 'Towriss', 'Trayford', 'Treneer', 'Trinke', 'Tuffs', 'Turfitt', 'Tweddell', 'Tweedie',
        'Twidale', 'Ucceli', 'Ullett', 'Ulyet', 'Urling', 'Urridge', 'Utton', 'Valencia', 'Valiant', 'Van den Dael',
        'Van der Linde', 'Vandrill', 'Van Giffen', 'Vanyushin', 'Vasyuchov', 'Vedishchev', 'Vedyasov', 'Vernall',
        'Verne', 'Verrillo', 'Viger', 'Vivers', 'Voas', 'Vobes', 'Volonte', 'Vyel', 'Wakeham', 'Walbrook',
        'Wanderschek', 'Wanka', 'Wardesworth', 'Ware', 'Wathen', 'Watkiss', 'Waycot', 'Wennington', 'Wetherby',
        'Whapples', 'Whate', 'Whiscard', 'Whitehouse', 'Whitter', 'Wicken', 'Wigfield', 'Wilber', 'Willets',
        'Willment', 'Willshaw', 'Wilse', 'Windaybank', 'Wing', 'Wisdom', 'Wisher', 'Witcomb', 'Wix', 'Woehler',
        'Woodham', 'Woolaghan', 'Worsfield', 'Worsfold', 'Worswick', 'Wrotham', 'Wycliff', 'Wyllt', 'Wynrahame',
        'Yare', 'Yarnell', 'Yearne', 'Yeiles', 'Yele', 'Ygou', 'Younie', 'Yuranovev', 'Yurocjhin'
    ];

    protected static array $airports = [
    'Acadiana Regional', 'Acaricuara', 'Adam', 'Adi Sutjipto International', 'Aek Godang', 'Aerotortuguero',
    'Afonso Pena', 'Aghajari', 'Aklavik/Freddie Carmichael', 'Akron Canton Regional', 'Akure', 'Al-Bough',
    'Al-Jawf Domestic', 'Al Ain International', 'Albert Lea Municipal', 'Albertus', 'Albert Whitted', 'Alejandro
    Velasco Astete International', 'Alejandro Velasco Astete International', 'Alenquer', 'Alexander Bay', 'Alferez
    FAP Alfredo Vladimir Sara Bauer', 'Alghero-Fertilia', 'Alice Arm/Silver City Seaplane Base', 'Alpha',
    'Alzintan', 'Ama', 'Amahai', 'Amarais', 'Amazon Bay', 'Amchitka Army Airfield', 'Amchitka Army Airfield',
    'American River', 'Ames Municipal', 'Amgu', 'Amílcar Cabral International', 'Anadolu', 'Andorra la Vella
    Heliport', 'Angoche', 'Annette Island', 'Anshun Huangguoshu', 'Anshun Huangguoshu', 'Antsirabato', 'Apolo',
    'Arapahoe Municipal', 'Arawa', 'Arly', 'Arnold Air Force Base', 'Arnold Air Force Base', 'Arnold Palmer
    Regional', 'Artigas International', 'Aseki', 'Aseki', 'Aspen-Pitkin Co/Sardy Field', 'Atmautluak', 'Attu
    Heliport', 'Auburn Lewiston Municipal', 'Auckland International', 'Aurukun', 'Auvergne', 'Auvergne', 'Awaba',
    'Ayacucho', 'Ayers Rock Connellan', 'Badajoz', 'Baibara', 'Baidoa', 'Baie-Johan-Beetz Water Aerodrome', 'Baita
    International', 'Bajawa Soa', 'Bakel', 'Baker Lake', 'Balcanoona', 'Bam', 'Bandon State', 'Bandundu', 'Banff',
    'Bangui M\'Poko International', 'Banja Luka International', 'Barstow Daggett', 'Barstow Daggett', 'Baruun
    Urt', 'Basongo', 'Basrah International', 'Batajnica Air Base', 'Beaufort County', 'Bedwell Harbour Seaplane
    Base', 'Beech Factory', 'Beihan', 'Beijing Nanyuan', 'Benguera Island', 'Beni Mellal', 'Benjamin Rivera
    Noriega', 'Bensbach', 'Berens River', 'Berens River', 'Berezovo', 'Berkley Municipal Heliport', 'Besalampy',
    'Bethel Seaplane Base', 'Betou', 'Bhavnagar', 'Big Bay Seaplane Base', 'Billings Logan International',
    'Birmingham-Shuttlesworth International', 'Blaise Diagne International', 'Block Island State', 'Bloodvein
    River', 'Bloodvein River', 'Bo', 'Boana', 'Boende', 'Bonaventure', 'Borg El Arab International', 'Borrego
    Valley', 'Boswell Bay', 'Bourke', 'Bousso', 'Bowen', 'Braga Municipal Aerodrome', 'Bragança', 'Bremen',
    'Brig. Lysias Augusto Rodrigues', 'Brindisi – Salento', 'Bristol', 'Broadus', 'Brochet', 'Bruce Campbell
    Field', 'Brunette Downs', 'Brunswick Golden Isles', 'Buariki', 'Buffalo Spring', 'Bulgan Sum', 'Bull Harbour
    Water Aerodrome', 'Bulolo', 'Bumi', 'Burketown', 'Buttonville Municipal', 'Butts AAF (Fort Carson) Air Field',
    'Böblingen Flugfeld', 'Cabo F.A.A. H. R. Bordón', 'Cabo F.A.A. H. R. Bordón', 'Cabo Rojo', 'Cadete FAP
    Guillermo Del Castillo Paredes', 'Cafunfo', 'Cagayan de Sulu', 'Camaxilo', 'Cambridge', 'Cambridge Bay',
    'Camilo Daza International', 'Camp Bastion', 'Campbell River Seaplane Base', 'Campo Grande', 'Cancún
    International', 'Cangapara', 'Canton Municipal', 'Capitán FAP Guillermo Concha Iberico International', 'Cap
    Manuel Niño International', 'Captain Auguste George', 'Captain Auguste George', 'Caransebeş', 'Carurú',
    'Cassilândia', 'Castellón-Costa Azahar', 'Castle', 'Center Island', 'Challis', 'Chandigarh', 'Changhai',
    'Changsha Huanghua International', 'Changzhi', 'Changzhou Benniu', 'Chatham Kent', 'Cheboksary',
    'Cherepovets', 'Chicago Midway International', 'Chignik Bay Seaplane Base', 'Chignik Lagoon', 'Chilliwack',
    'Chingozi', 'Chipata', 'Chistochina', 'Christmas Island', 'Chuja Port Heliport', 'Ciampino–G. B. Pastine
    International', 'Circle Hot Springs', 'Cirilo Queiróz', 'Ciudad Constitución', 'Claremont Municipal',
    'Clarksville–Montgomery County Regional', 'Clermont', 'Clinton County', 'Clinton Regional', 'Club Makokola',
    'Cluny', 'Coari', 'Cobar', 'Colac', 'College Park', 'Colon', 'Colorado Creek', 'Columbia', 'Colón', 'Colón',
    'Comandante Ariston Pessoa', 'Comiso', 'Comodoro Arturo Merino Benítez International', 'Coolibah',
    'Coolibah', 'Corcoran', 'Corcoran', 'Cork', 'Coronel FAP Francisco Secada Vignetta International', 'Corvo',
    'Cotopaxi International', 'Cottbus-Drewitz', 'Cottbus-Drewitz', 'Cradock', 'Craig Moffat', 'Currais Novos',
    'Curuzu Cuatia', 'Cuyahoga County', 'Cáceres', 'Dabolim', 'Dalhart Municipal', 'Dalton Municipal', 'Daly
    Waters', 'Da Nang International', 'Dare County Regional', 'Datadawai', 'Daup', 'David Constantijn Saudale',
    'Daytona Beach International', 'Dean River', 'Decatur County Industrial Air Park', 'Denis Island', 'Denver
    International', 'Derim', 'Destin-Ft Walton Beach', 'Dhaalu Atoll', 'Dien Bien Phu', 'Dimapur', 'Dimbokro',
    'Diyarbakir', 'Djibo', 'DLF', 'Dobbins Air Reserve Base', 'Dobbins Air Reserve Base', 'Docker River',
    'Douglas-Charles', 'Downsview', 'Downtown Airpark', 'Dubrovnik', 'Duncan Town', 'Durham Tees Valley', 'Eagle
    Lake', 'Earlton (Timiskaming Regional)', 'East Hampton', 'Ed-Air', 'Eduardo Falla Solano', 'El Alamein
    International', 'El Arish International', 'El Daein', 'El Dorado', 'Elelim', 'Elelim', 'Ellsworth Air Force
    Base', 'El Nouzha', 'Elrose', 'Elrose', 'El Troncal', 'Emo River Airstrip', 'Emo River Airstrip', 'Emporia
    Municipal', 'Enarotali', 'Enarotali', 'Enontekio', 'Ercan International', 'Erechim', 'Erie International Tom
    Ridge Field', 'Erume', 'Erzincan', 'Esenboğa International', 'F. D. Roosevelt', 'Fairbury Municipal',
    'Fairfield Municipal', 'Fairmont Municipal', 'Farewell', 'Fayetteville Municipal', 'Fazenda das Represas',
    'Fazenda das Represas', 'Fazenda Piraguassu', 'Fazenda Santa Maria', 'Fazenda São João', 'Fergus Falls
    Municipal - Einar Mickelson Field', 'Flamingo', 'Fond du Lac County', 'Fontanges', 'Fort Smith Regional',
    'Francistown', 'Franklin County', 'Frank Miloye Milenkowichi–Marília State', 'Fua\'amotu International',
    'Fulton County Brown Field', 'Futuna', 'Galbraith Lake', 'Gamboola', 'Gardner Municipal', 'Garissa', 'Garowe',
    'Gasmata Island', 'Gatokae', 'Gayndah', 'Gaziantep International', 'Geilo Dagali', 'General Abelardo L.
    Rodríguez International', 'General Edward Lawrence Logan International', 'General Francisco J. Mujica
    International', 'General WM J Fox Airfield', 'Geneva Cointrin International', 'Gewayentana', 'Gjoa Haven',
    'Glasgow Prestwick', 'Glendale Fokker Field', 'Glendale Fokker Field', 'Gnarowein', 'Gobabis', 'Golog Maqin',
    'Gonaili', 'Gorge Harbour Seaplane Base', 'Gorno-Altaysk', 'Goshen Municipal', 'Gostomel', 'Goya',
    'Grabtsevo', 'Grajaú', 'Granite Downs', 'Gravatai', 'Greater Cumberland Regional', 'Greater Moncton
    International', 'Greenway Sound Seaplane Base', 'Grozny North', 'Guadalupe', 'Guanacaste', 'Guanare',
    'Gustavus', 'Guymon Municipal', 'Haikou Meilan International', 'Hakkari Yüksekova', 'Half Moon Bay', 'Hall
    Beach', 'Hamad International', 'Hambantota Seaplane Base', 'Hami', 'Hao', 'Harar Meda', 'Haycock', 'Hayward
    Executive', 'Hector International', 'Heihe', 'Hemet Ryan', 'Herendeen Bay', 'Hermanos Serdán International',
    'Hermiston Municipal', 'Herrera', 'Heydar Aliyev International', 'Hill City Municipal', 'Hrodna', 'Hua Hin',
    'Huayuan', 'Huayuan', 'Hughes', 'Hultsfred', 'Huntingburg', 'Huntsville International Carl T Jones Field',
    'Hydaburg Seaplane Base', 'Idre', 'Ifuru', 'Iginniarfik', 'Ignace Municipal', 'Ignatyevo', 'Ikamiut Heliport',
    'Ikela', 'Iliamna', 'Impfondo', 'Ingeniero Alberto Acuña Ongay International', 'In Guezzam', 'Inhaca', 'In
    Salah', 'Iraan Municipal', 'Itabuna', 'Ivato', 'Iğdır', 'Jack Northrop Field Hawthorne Municipal', 'Jack
    Northrop Field Hawthorne Municipal', 'Jaipur International', 'Jaisalmer', 'Jalalabad', 'Jamba', 'Jamnagar',
    'Jeki', 'Jiamusi', 'Jinnah International', 'Jiujiang Lushan', 'Joensuu', 'Johan Adolf Pengel International',
    'John A. Osborne', 'José Celestino Mutis', 'João Simões Lopes Neto International', 'Juan Casiano', 'Juanda
    International', 'Juan Mendoza', 'Jérémie', 'Júlio de Castilho', 'Kadanwari', 'Kahramanmaraş',
    'Kahramanmaraş', 'Kaitaia', 'Kalay', 'Kalpowar', 'Kalymnos', 'Kamishly', 'Kandrian', 'Kangding', 'Kansas City
    International', 'Kapalua', 'Karup', 'Kasaan Seaplane Base', 'Kasompe', 'Kauhava', 'Kawthoung', 'Kelowna
    International', 'Kempsey', 'Kenitra', 'Keokuk Municipal', 'Khartoum International', 'Kherson International',
    'Khovd', 'Kigoma', 'Kikwit', 'Kilkenny', 'Kincardine Municipal', 'Kindamba', 'King Hussein Air College', 'King
    Khaled International', 'King Khaled International', 'Kirovograd', 'Kisengam', 'Kisimayu', 'Kissimmee Gateway',
    'Kissimmee Gateway', 'Kissimmee Gateway', 'Kiwai', 'Kneeland', 'Kokshetau', 'Koliganek', 'Koltsovo', 'Kos',
    'Kota Kinabalu International', 'Kotoka International', 'Krainiy', 'Kribi', 'Kugaaruk', 'Kulik Lake',
    'Kumejima', 'Kuusamo', 'Kyle Oakley Field', 'Labo', 'La Florida', 'LaGrange Callaway', 'Lake Charles
    Regional', 'Lake County', 'Lakefront', 'Lakeland', 'Lake Murray', 'Lake Murray', 'La Laguna', 'Lamidanda',
    'Lankaran International', 'Lankaran International', 'La Pedrera', 'Lappeenranta', 'Larnaca International',
    'Las Cruces', 'Las Flores', 'La Tontouta International', 'Laura', 'Lava Falls Heliport', 'Lawrence J
    Timmerman', 'Lawrence Municipal', 'Lawrenceville Brunswick Municipal', 'Lawson Army Air Field (Fort Benning)',
    'Layang-Layang', 'Leeds Bradford', 'Le Havre Octeville', 'Lemmon Municipal', 'Les Sables-d\'Olonne Talmont',
    'Les Sables-d\'Olonne Talmont', 'Lester B. Pearson International', 'Lewis University', 'Licenciado Gustavo
    Díaz Ordaz International', 'Limeira', 'Little Grand Rapids', 'Liverpool John Lennon', 'Lock', 'Logan-Cache',
    'Loikaw', 'Lokichoggio', 'London', 'Long Sukang', 'Lorraine', 'Los Chiles', 'Lugano', 'Luiza', 'Lupin',
    'Lutselk\'e', 'Lutselk\'e', 'Lutsk', 'Lyons-Rice County Municipal', 'Lázaro Cárdenas', 'Machado', 'Magway',
    'Maimun Saleh', 'Makabana', 'Makung', 'Makung', 'Malabo', 'Malam', 'Malanje', 'Malatya Erhaç', 'Malikus
    Saleh', 'Manapouri', 'Mandabe', 'Mangalore International', 'Mangshi', 'Mansons Landing Seaplane Base',
    'Manti-Ephraim', 'Manuel Márquez de León International', 'Mapua(Mabua)', 'Mardin', 'Marechal Cunha Machado
    International', 'Maria Reiche Neuman', 'Mary\'s Harbour', 'Masalembo', 'Masasi', 'Massena International
    Richards Field', 'Matamata Glider', 'Matane', 'Matecaña International', 'Maverick County Memorial
    International', 'Maya-Maya', 'Mayor Buenaventura Vivas International', 'MBS International', 'Mc Alester
    Regional', 'McArthur River Mine', 'Mc Clellan Airfield', 'Mc Comb/Pike County/John E Lewis Field', 'McGrath',
    'Mefford Field', 'Megève', 'Megève', 'Melbourne International', 'Memanbetsu', 'Memphis International',
    'Mercedita', 'Metropolitan Oakland International', 'Mikkeli', 'Mindik', 'Ministro Pistarini International',
    'Minvoul', 'Miramichi', 'Mitchell', 'Miyako', 'Moanda', 'Moenjodaro', 'Mogador', 'Mogi Mirim', 'Mongo',
    'Mongu', 'Monseñor Óscar Arnulfo Romero International', 'Montpellier-Méditerranée', 'Monument Valley',
    'Mooraberree', 'Morlaix-Ploujean', 'Mornington Island', 'Morobe', 'Moruya', 'Mostar International', 'Mostar
    International', 'Moyale', 'Mt. Fuji Shizuoka', 'Mueda', 'Multan International', 'Mundo Novo', 'Mundo Novo',
    'Murod Kond', 'Muscat International', 'Musgrave', 'Mushaf Air Base', 'Muskegon County', 'Mwanza', 'Mzuzu',
    'M\'Vengue El Hadj Omar Bongo Ondimba International', 'Málaga', 'Nacala', 'Nadi International',
    'Nakashibetsu', 'Nakhon Phanom', 'Namangan', 'Namudi', 'Namutoni', 'Nancy-Essey', 'Nangade', 'Nangasuri',
    'Nangasuri', 'Nanping Wuyishan', 'Nanuque', 'Nanuque', 'Nanuque', 'Nartron Field', 'Narvik Framnes',
    'Nashville International', 'Negarbo(Negabo)', 'Nephi Municipal', 'New Orleans NAS JRB/Alvin Callender Field',
    'Newport State', 'Niagara Falls International', 'Ninoy Aquino International', 'Nonouti', 'Norfolk Naval
    Station (Chambers Field)', 'Norilsk-Alykel', 'Northeast Ohio Regional', 'North Eleuthera', 'Northern Aroostook
    Regional', 'North Ronaldsay', 'Norðfjörður', 'Norðfjörður', 'Noshahr', 'Noshahr', 'Nzérékoré',
    'Oamaru', 'Odienne', 'Oesman Sadik, Labuha', 'Ogeranang', 'Ohio University Snyder Field', 'Ohrid St. Paul the
    Apostle', 'Olavarria', 'Olbia Costa Smeralda', 'Ono-i-Lau', 'Opuwa', 'Ord River', 'Orenburg Central', 'Orán',
    'Orūzgān', 'Ottumwa Regional', 'Otu', 'Ouro Fino', 'Ouyen', 'Oxford (Kidlington)', 'Palestine Municipal',
    'Pangia', 'Pangnirtung', 'Pangsuma', 'Panguilemo', 'Pantnagar', 'Paramakatoi', 'Parasi', 'Paris Beauvais
    Tillé', 'Pasighat', 'Pasir Pangaraan', 'Patos de Minas', 'Paulatuk (Nora Aliqatchialuk Ruben)', 'Pendopo',
    'Penn Valley', 'Perth International', 'Peshawar International', 'Peshawar International', 'Phillips Army Air
    Field', 'Phnom Penh International', 'Piatã', 'Pierre Regional', 'Pine Cay', 'Pinto Martins International',
    'Playa De Oro International', 'Podgorica', 'Podkamennaya Tunguska', 'Pohnpei International', 'Pointe Vele',
    'Pontoise - Cormeilles-en-Vexin', 'Port-de-Paix', 'Port Augusta', 'Port Bailey Seaplane Base', 'Port Hope
    Simpson', 'Portland International', 'Portland Troutdale', 'Port Meadville', 'Porto Amboim', 'Porto dos
    Gaúchos', 'Port Pirie', 'Port Sudan New International', 'Poznań-Ławica', 'Prieska', 'Prince Abdulmohsin Bin
    Abdulaziz', 'Propriano', 'Propriá', 'Proserpine Whitsunday Coast', 'Prospect Creek', 'Pryor Field Regional',
    'Puerto Armuelles', 'Pukaki', 'Pulau Panjang', 'Punta Cana International', 'Purdue University', 'Pyongyang
    Sunan International', 'Qazvin', 'RAF Brize Norton', 'RAF Greenham Common', 'RAF Lakenheath', 'RAF Leuchars',
    'RAF Linton-On-Ouse', 'RAF Odiham', 'RAF Odiham', 'Rafsanjan', 'RAF Scampton', 'RAF West Malling', 'Rajbiraj',
    'Ramata', 'Ramon Air Base', 'Ranong', 'Red Devil', 'Redenção', 'Red Lake', 'Regina', 'Reims-Champagne (BA
    112) Air Base', 'Revelstoke', 'Richmond International', 'Rimatara', 'Rio Amazonas', 'River Cess/Heliport',
    'Rivière-du-Loup', 'Robe', 'Robert Gray  Army Air Field', 'Rochester International', 'Rockhampton', 'Rock
    Sound', 'Rockwood Municipal', 'Roma', 'Rome State', 'Ronald Reagan Washington National', 'Rotterdam The
    Hague', 'Rubelsanto', 'Rugao Air Base', 'Rurenabaque', 'Saidpur', 'Saidu Sharif',
    'Saint-Georges-de-l\'Oyapock', 'Salgado Filho', 'Samjiyŏn', 'San Antonio Copalar', 'Sancti Spiritus',
    'Sandane (Anda)', 'San José Island', 'San Juan /Uganik/ Seaplane Base', 'Santa Ana Del Yacuma', 'Santa
    Bárbara', 'Santa Bárbara del Zulia', 'Santa Cruz', 'Sarajevo International', 'Sarakhs', 'Sasstown', 'Sauce
    Viejo', 'Savannakhet', 'Scholes International At Galveston', 'Schoolcraft County', 'Scottsdale', 'Scusciuban',
    'Scusciuban', 'Sebba', 'Selaparang', 'Seldovia', 'Semera', 'Semporna', 'Senggeh', 'Shamshernagar', 'Shenzhen
    Bao\'an International', 'Shively Field', 'Shoreham', 'Shreveport Downtown', 'Shun Tak Heliport', 'Sialkot',
    'Sialum', 'Sibiu International', 'Sierra Grande', 'Silgadi Doti', 'Silver Creek', 'Sintang(Susilo)', 'Sir
    Seretse Khama International', 'Sir Seretse Khama International', 'Sishen', 'Sishen', 'Siuna', 'Skopje
    Alexander the Great', 'Skukuza', 'Skwentna', 'Skylark Field', 'Sleetmute', 'Sleetmute', 'Smith Reynolds',
    'Soko', 'Solovki', 'South Jersey Regional', 'South Molle Island Helipad', 'Southwest Washington Regional',
    'Sparrevohn LRRS', 'Squamish', 'Srednekolymsk', 'St-François', 'St. Lewis (Fox Harbour)', 'St. Paul', 'St.
    Theresa Point', 'Stafsberg', 'Stavanger Sola', 'Stella Maris', 'Stewart', 'St Gallen Altenrhein', 'St Jean',
    'St Louis Lambert International', 'St Louis Lambert International', 'St Louis Regional', 'St Michael',
    'Stockholm-Bromma', 'Stockholm Skavsta', 'Stockholm Västerås', 'Stony Rapids', 'St Paul Island', 'Sulaco',
    'Sullivan Bay Seaplane Base', 'Summit', 'Sundsvall-Härnösand', 'Sungai Pakning Bengkalis', 'Sunshine Coast',
    'Suvarnabhumi', 'Sylvester', 'Sócrates Rezende', 'Tacheng', 'Taganrog Yuzhny', 'Takotna', 'Talhar',
    'Taloyoak', 'Tamana Island', 'Tampere-Pirkkala', 'Tamworth', 'Tancredo Thomas de Faria', 'Tanque Novo',
    'Tarakbits', 'Taranto-Grottaglie "Marcello Arlotta"', 'Tarbela Dam', 'Tarko-Sale', 'Tatitlek', 'Tauramena',
    'Tauta', 'Tazadit', 'Ta\'izz International', 'Tefé', 'Telefomin', 'Teller', 'Tennant Creek', 'The Ohio State
    University - Don Scott Field', 'Thessaloniki Macedonia International', 'Thimarafushi', 'Tianjin Binhai
    International', 'Tindal', 'Tobermorey', 'Tobias Bolanos International', 'Tocumen International', 'Tofino
    Harbour Seaplane Base', 'Tokyo Haneda International', 'Tomanggong', 'Tonghua Sanyuanpu', 'Tongliao',
    'Tongliao', 'Tonopah Test Range', 'Tonopah Test Range', 'Tororo', 'Torrington Municipal', 'Totegegie',
    'Totegegie', 'Tours-Val-de-Loire', 'Toussaint Louverture International', 'Trabzon International', 'Trabzon
    International', 'Trent Lott International', 'Trenton Mercer', 'Triangle North Executive', 'Trondheim Værnes',
    'Trondheim Værnes', 'Tsile Tsile', 'Tsumeb', 'Tubuai', 'Tulaghi Heliport', 'Turbat International', 'Tydeo
    Larre Borges', 'Ubon Ratchathani', 'Uchiza', 'Udorn Air Base', 'Ukhta', 'Ulawa', 'Umberto Modiano', 'Umbu
    Mehang Kunda', 'Upala', 'Uralsk', 'Uray', 'Uru Harbour', 'Usiminas', 'Usiminas', 'Utirik', 'Uummannaq
    Heliport', 'Uzhhorod International', 'Valencia', 'Valesdir', 'Valley International', 'Venango Regional',
    'Venice Municipal', 'Vichy-Charmeil', 'Vila Real', 'Vilhelmina', 'Vinnytsia/Gavyryshivka', 'Virgil I Grissom
    Municipal', 'Virginia Tech Montgomery Executive', 'Vista Field', 'Vodochody', 'Votuporanga', 'Vunisea',
    'Wabo', 'Wakaya Island', 'Waldronaire', 'Walgett', 'Walter Bündchen', 'Walvis Bay', 'Wang-an', 'Wantoat',
    'Warren "Bud" Woods Palmer Municipal', 'Warren County Memorial', 'Warren Field', 'Wasu', 'Wasua', 'Waterbury
    Oxford', 'Waterloo', 'Waterville Robert Lafleur', 'Wattay International', 'Waverney', 'Waynesville-St. Robert
    Regional Forney field', 'Weipa', 'Wekweètì', 'Wemindji', 'Westerly State', 'Westport', 'Westport',
    'Whalsay', 'Wiarton', 'Wiley Post Will Rogers Memorial', 'Willmar Municipal -John L Rice Field', 'Winter Haven
    Regional - Gilbert Field', 'Woitape', 'Wollaston Lake', 'Wonderboom', 'Wonju/Hoengseong Air Base (K-38/K-46)',
    'Woodie Woodie', 'Worcester Regional', 'Worland Municipal', 'Wrigley', 'Wuhai', 'Xiamen Gaoqi International',
    'Xiangyang Liuji', 'Xienglom', 'Xingning', 'Xi\'an Xiguan', 'Yandina', 'Yangon International', 'Yasser Arafat
    International', 'Yedinka', 'Yellowstone Regional', 'Yemelyanovo', 'Yemelyanovo', 'Yerington Municipal',
    'Yerington Municipal', 'Yevlakh', 'Yichun Mingyueshan', 'Yorketown', 'Yuba County', 'Yuendumu', 'Yélimané',
    'Zaranj', 'Zhanjiang', 'Zhuhai Jinwan', 'Zonguldak', 'Zumbi dos Palmares', 'Ålesund', 'Île des Pins',
    'Öndörkhaan'
    ];
    
    
    protected static array $countries = [
        'AF' => 'Afghanistan', 'AI' => 'Anguilla', 'AL' => 'Albania', 'AM' => 'Armenia', 
        'AR' =>'Argentina', 'AU' => 'Australia', 'AZ' => 'Azerbaijan', 'BB' => 'Barbados', 'BE' => 'Belgium', 
        'BG'=> 'Bulgaria', 'BI' => 'Burundi', 'BJ' => 'Benin', 'BO' => 'Bolivia', 'BR' => 'Brazil', 
        'BY' =>'Belarus', 'CA' => 'Canada', 'CD' => 'Democratic Republic of the Congo', 'CF' => 'Central African Republic', 
        'CI' => 'Ivory Coast', 'CL' => 'Chile', 'CM' => 'Cameroon', 'CN' => 'China', 
        'CO' => 'Colombia', 'CR' => 'Costa Rica', 'CU' => 'Cuba', 'CY' => 'Cyprus', 'CZ' => 'Czech Republic',
        'DE' => 'Germany', 'DJ' => 'Djibouti', 'DK' => 'Denmark', 'DO' => 'Dominican Republic', 'EG' => 'Egypt',
        'ES' => 'Spain', 'ET' => 'Ethiopia', 'FI' => 'Finland', 'FO' => 'Faroe Islands', 'FR' => 'France',
        'GB' => 'United Kingdom', 'GM' => 'Gambia', 'GN' => 'Guinea', 'GR' => 'Greece', 'GT' => 'Guatemala',
        'HN' => 'Honduras', 'HR' => 'Croatia', 'HT' => 'Haiti', 'HU' => 'Hungary', 'ID' => 'Indonesia', 
        'IE' => 'Ireland', 'IL' => 'Israel', 'IR' => 'Iran', 'IT' => 'Italy', 'JM' => 'Jamaica', 
        'JO' => 'Jordan', 'JP' => 'Japan', 'KE' => 'Kenya', 'KG' => 'Kyrgyzstan', 'KH' => 'Cambodia', 
        'KM' => 'Comoros', 'KP' => 'North Korea', 'KR' => 'South Korea', 'KZ' => 'Kazakhstan', 'LA' => 'Laos', 
        'LK' => 'Sri Lanka', 'LR' => 'Liberia', 'LT' => 'Lithuania', 'LU' => 'Luxembourg', 'LV' => 'Latvia', 
        'LY' => 'Libya', 'MA' => 'Morocco', 'MG' => 'Madagascar', 'MH' => 'Marshall Islands',
        'MK' => 'Macedonia', 'ML' => 'Mali', 'MM' => 'Myanmar', 'MN' => 'Mongolia', 'MT' => 'Malta', 
        'MU' => 'Mauritius', 'MX' => 'Mexico', 'MY' => 'Malaysia', 'MZ' => 'Mozambique', 'NA' => 'Namibia', 
        'NG' => 'Nigeria', 'NI' => 'Nicaragua', 'NL' => 'Netherlands', 'NO' => 'Norway', 'NZ' => 'New Zealand', 
        'PA'  => 'Panama', 'PE' => 'Peru', 'PF' => 'French Polynesia', 'PG' => 'Papua New Guinea', 'PH' => 'Philippines', 
        'PK' => 'Pakistan', 'PL' => 'Poland', 'PS' => 'Palestinian Territory', 'PT' => 'Portugal', 'PY' => 'Paraguay', 
        'RE' => 'Reunion', 'RS' => 'Serbia', 'RU' => 'Russia', 'SD' => 'Sudan', 'SE' => 'Sweden', 'SI' => 'Slovenia', 
        'SO' => 'Somalia', 'SS' => 'South Sudan', 'SV' => 'El Salvador', 'SY' => 'Syria', 'TD' => 'Chad', 'TG' => 'Togo', 
        'TH' => 'Thailand', 'TM' => 'Turkmenistan', 'TN' => 'Tunisia', 'TW' => 'Taiwan', 'TZ' => 'Tanzania', 'UA' => 'Ukraine', 
        'UG' => 'Uganda', 'US' => 'United States', 'UY' => 'Uruguay', 'UZ' => 'Uzbekistan', 'VE' => 'Venezuela',
        'VN' => 'Vietnam', 'WF' => 'Wallis and Futuna', 'XK' => 'Kosovo', 'YE' => 'Yemen', 'ZA' => 'South Africa'
        ];
        
    public static function getFirstNames(): ArrayClass
    {
        return new ArrayClass(self::$firstNames);
    }

    public static function getLastNames(): ArrayClass
    {
        return new ArrayClass(self::$lastNames);
    }

    public static function loremIpsumVocabular(): ArrayClass
    {
        return new ArrayClass(self::$lorem);
    }
}
