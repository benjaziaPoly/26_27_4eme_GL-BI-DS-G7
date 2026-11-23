<div align="center">

# 🚀 Projet Symfony — 4ème année (2026–2027)

**Application web développée avec Symfony 7 dans le cadre du cours de développement web avancé (GL / BI / DS - G7).**

![Symfony](https://img.shields.io/badge/Symfony-7.x-000000?style=for-the-badge&logo=symfony&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-%3E%3D%208.2-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Database](https://img.shields.io/badge/MySQL%20%2F%20MariaDB-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Academic Year](https://img.shields.io/badge/Ann%C3%A9e-2026--2027-2ea44f?style=for-the-badge)

Encadré par : **Mohamed Ben Jazia**

</div>

---

## 📋 Prérequis

Avant de démarrer, assurez-vous que votre environnement local dispose des outils suivants :

| Outil | Version minimale | Remarque |
| :--- | :--- | :--- |
| **PHP** | `8.2` ou supérieur | Extensions `intl`, `pdo_mysql`, `ctype`, `iconv` activées |
| **Composer** | `2.x` | Installé globalement ou via `composer.phar` |
| **Base de données** | MySQL `8.0` / MariaDB `10.6+` | Via XAMPP ou serveur natif |
| **Git** | `2.x` | Pour le clonage et la gestion de versions |

> [!CAUTION]
> **<span style="color:red">Pour utiliser Symfony 7 selon votre version de PHP, suivez les étapes suivantes :</span>**
>
> - **Pour utiliser avec PHP 8.2.x :** dans le fichier `composer.json`, chercher la ligne `phpunit/phpunit` et changer la version utilisée vers `^11.5`.
> - **Pour PHP 8.3.x :** changer la version de `phpunit/phpunit` vers `^12.5`.
> - **Ensuite, lancer la commande suivante :**
> ```bash
> php composer.phar update phpunit/phpunit --with-all-dependencies
> # Ou bien si Composer est installé globalement :
> composer update phpunit/phpunit --with-all-dependencies
> ```

---

## ⚙️ Installation en local

### 1. Cloner le dépôt et accéder au dossier du projet

```bash
git clone [https://github.com/benjaziaPoly/26_27_4eme_GL-BI-DS-G7.git](https://github.com/benjaziaPoly/26_27_4eme_GL-BI-DS-G7.git)
cd 26_27_4eme_GL-BI-DS-G7