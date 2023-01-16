<?
class logic
{
    public static function delete($id)
    {
        company::delete_company(intval($id));
        return [];
    }

    public static function create($name, $img, int $region, $description, int $annular_prod): array
    {
        $error = array();
        if ($name == "") $error[1] = "Введите название компании";
        if ($region == "") $error[2] = "Введите регион";

        if (count($error)) return $error;

        company::create_company(
            $name,
            $img,
            $region,
            $description,
            $annular_prod
        );
        return [];
    }

    public static function edit(int $id, $name, $img, int $region, $description, int $annular_prod)
    {
        $error = array();
        if ($name == "") $error[0] = "Введите название компании";
        if ($region == "") $error[1] = "Введите регион";

        if (count($error)) return $error;

        company::edit_company(
            $id,
            $name,
            $img,
            $region,
            $description,
            $annular_prod
        );
        return [];
    }
}
