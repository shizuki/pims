<?php

namespace App\Enums;

enum Gender: int
{
    use EnumsDescription;

    case Agender = 1; // 無性別者
    case Androgyne = 2; // 両性。男性・女性のはっきりとした身体的区別のできない人。
    case Androgynous = 3; // 両性的・中性的。性の差異を超えて自由な思考や行動をする人。
    case Bigender = 4; // 両方のジェンダーを自認して男性・女性を切り替えている人。
    case Cisgender = 5; // 身体的性別と自分の性認識が一致している人。
    case CisgenderFemale = 6; // 身体的性別が女性で、自己を女性と認識している人。
    case CisgenderWoman = 7; // Cisgender Femaleと同義。
    case CisgenderMale = 8; // 身体的性別が男性で、自己を男性と認識している人。
    case CisgenderMan = 9; // Cisgender Maleと同義。
    case Cis = 10; // Cisgenderの略称。
    case CisFemale = 11; // Cisgender Femaleと同義。
    case CisWoman = 12; // Cisgender Femaleと同義
    case CisMale = 13; // Cisgender Maleと同義。
    case CisMan = 14; // Cisgender Maleと同義。
    case FemaleToMale = 15; // 身体的には女性であるが、性自認が男性の人。
    case MaleToFemale = 16; // 身体的には男性であるが、性自認が女性の人。
    case FTM = 17; // Female to Maleの略称。
    case MTF = 18; // Male to Femaleの略称。
    case GenderFluid = 19; // ジェンダーが流動的な人。自己認識として男性・女性の間を揺れ動いている状態で二重の生活をしている人。
    case GenderNonconforming = 20; // 包括的に（レズビアン・ゲイも含む）既存のジェンダー分類に当てはまらない人。
    case GenderQuestioning = 21; // 自分の性認識が未確定の人。
    case GenderVariant = 22; // 生物学的性や性自認と異なる人。同性愛者などを含めた広義の概念を持つ。
    case Genderqueer = 23; // 既存のジェンダー分類に当てはまらず、一言で表せない性・アイデンティティを持った人。
    case Intersex = 24; // 中間的な性・半陰陽者・両性具有者。遺伝子、染色体、性腺、内性・外性器などの一部または全てが非典型的である人。
    case Neither = 25; // 男性・女性のどちらでもない人。
    case Neutrois = 26; // 性別がないと自認している人。身体的無性になりたいと考えている人。
    case NonBinary = 27; // 第３の性。ジェンダーを男性・女性に限定せず、両性が混合または中間的、もしくは全く違うものを感じる人。
    case Other = 28; // その他。
    case Pangender = 29; // 性愛思考に関係なく、性別という概念を気にせず自分を自由に捉えている人。
    case Trans = 30; // 性同一性障害。生まれ持った性と、自認している性とが一致しない人。
    case TransAsterisk = 31; // Transを包括的に捉えた表現。「Asterisk」は性同一性障害すべてのアイデンティティを指し、その多様性をへ狭義的には分類せず、包括的に捉える人。
    case TransFemale = 32; // 身体は男性であるが性自認は女性の人。
    case TransAsteriskFemale = 33; // Trans Femaleを包括的に捉えた表現。
    case TransWoman = 34; // Trans Femaleと同じ。
    case TransAsteriskWoman = 35; // Trans* Femaleと同じ。
    case TransMale = 36; // 身体は女性であるが性自認が男性の人。
    case TransAsteriskMale = 37; // Trans Maleを包括的に捉えた表現。
    case TransMan = 38; // Trans Maleと同じ。
    case TransAsteriskMan = 39; // Trans* Maleと同じ。
    case TransPerson = 40; // 身体と心の性別に違和感・不一致感を持つ人。
    case TransAsteriskPerson = 41; // Trans Personを包括的に捉えた表現。
    case Transgender = 42; // 性同一性障害。生まれついた性と自認している性が一致しない人たちの総称。
    case TransgenderFemale = 43; // 性不適合者で女性であると自認している人。広義では女性に性転換した人も含む。
    case TransgenderWoman = 44; // Transgender Femaleと同義。
    case TransgenderMale = 45; // 性不適合者で男性であると自認している人。広義では男性に性転換した人も含む。
    case TransgenderMan = 46; // Transgender Maleと同義。
    case TransgenderPerson = 47; // 性不適合者。広義では性転換した人も含む。
    case Transfeminine = 48; // どちらかというと女性と自認しているトランスジェンダー。
    case Transmasculine = 49; // どちらかというと男性と自認しているトランスジェンダー。
    case Transsexual = 50; // 性同一性障害で性別適合手術などにより身体の性転換を望む人。
    case TranssexualFemale = 51; // 性別適合手術などによって女性になった人。
    case TranssexualWoman = 52; // Transgender Femaleと同義。
    case TranssexualMale = 53; // 性別適合手術などによって男性となった人。
    case TrenssexualMan = 54; // Transsexual Maleと同義。
    case TrenssexualPerson = 55; // 性転換者。
    case TwoSpirit = 56; // ネイティブ・アメリカンの伝統的に認識されてきた多様なジェンダー・ロール（性役割）を担う人。
}
