<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $values = array(
      array(
        'en_title' => 'Respect',
        'ru_title' => 'Уважение',
        'tj_title' => 'Эҳтиром',
        'en_text' => 'We recognize the value of each person in the company, we respect his work, time, freedom and own opinion.',
        'ru_text' => 'Мы признаем ценность каждого человека в компании, уважаем его труд, время, свободу и собственное мнение.',
        'tj_text' => 'Мо арзиши ҳар як шахсро дар ширкат эътироф мекунем, меҳнат, вақт, озодӣ ва фикри шахсии худро эҳтиром мекунем.',
      ),
      array(
        'en_title' => 'Self-realization',
        'ru_title' => 'Самореализация',
        'tj_title' => 'Худшиносӣ',
        'en_text' => 'We have created an atmosphere within the Company conducive to the self-realization of each member of the team.',
        'ru_text' => 'Мы создали внутри Компании атмосферу, способствующую самореализации каждого члена команды.',
        'tj_text' => 'Мо дар дохили ширкат фазои мусоид фароҳам овардем, ки барои худшиносии ҳар як аъзои даста мусоид фароҳам оварда шавад.',
      ),
      array(
        'en_title' => 'Cheerfulness',
        'ru_title' => 'Жизнерадостность',
        'tj_title' => 'Хушбахтӣ',
        'en_text' => 'We are optimistic, cheerful, energizing positive. We know that we have every right to please.',
        'ru_text' => 'Мы оптимистичны, жизнерадостны, заряжаем энергией позитива. Мы знаем, что имеем полное право радовать.',
        'tj_text' => 'Мо хушбин, шодмон ва қувватбахши мусбат ҳастем. Мо медонем, ки мо ҳама ҳуқуқ дорем, ки писанд ояд.',
      ),
      array(
        'en_title' => 'Health',
        'ru_title' => 'Здоровье',
        'tj_title' => 'Тандурустй',
        'en_text' => 'Health is the main value of life. Health is a state of complete physical and social well-being.',
        'ru_text' => 'Здоровье – это главная ценность жизни. Здоровье – это состояние полного физического и социального благополучия.',
        'tj_text' => 'Саломатӣ арзиши асосии ҳаёт аст. Саломатӣ ҳолати некӯаҳволии пурраи ҷисмонӣ ва иҷтимоӣ мебошад.',
      ),
      array(
        'en_title' => 'Command',
        'ru_title' => 'Командность',
        'tj_title' => 'Муттахиди',
        'en_text' => 'Our strength is in unity and cohesion, in the conscious preference for team interests.',
        'ru_text' => 'Наша сила в единстве и сплоченности, в осознанном предпочтении командных интересов.',
        'tj_text' => 'Кувваи мо дар ягонагй ва муттахидй, дар аф-залияти бошуурона ба манфиатхои коллектив аст.',
      ),
      array(
        'en_title' => 'Professionalism',
        'ru_title' => 'Профессионализм',
        'tj_title' => 'Профессионализм',
        'en_text' => 'We are constantly working to improve our professional skills, improving knowledge and skills.',
        'ru_text' => 'Мы постоянно работаем над повышением своего профессионального мастерства, совершенствуя знания и умения.',
        'tj_text' => 'Мо барои такмил додани махорати касбии худ, такмил додани дониш ва махорати худ пайваста чидду чахд мекунем.',
      ),
    );

    foreach ($values as $value) {
      Value::create([
        'en_title' => $value['en_title'],
        'ru_title' => $value['ru_title'],
        'tj_title' => $value['tj_title'],
        'en_text' => $value['en_text'],
        'ru_text' => $value['ru_text'],
        'tj_text' => $value['tj_text'],
      ]);
    }
  }
}
