# Deployment Guide - RMCL Website

## 🚀 Hosting Options for PHP Projects

### Option 1: Render.com (Recommended - Free PHP Hosting)

**Steps:**
1. **Push code to GitHub:**
   ```bash
   git init
   git add .
   git commit -m "Initial commit"
   git remote add origin https://github.com/YOUR_USERNAME/rmcl.git
   git push -u origin main
   ```

2. **Sign up at Render.com:**
   - Go to https://render.com
   - Sign up with GitHub (free)

3. **Create Web Service:**
   - Click "New +" → "Web Service"
   - Connect your GitHub repository: `https://github.com/Sahilr2501/rmcl`
   - **IMPORTANT:** Choose one of these options:

   **Option A: Use Dockerfile (Recommended - Already Created)**
   - Render will automatically detect the Dockerfile
   - Build Command: (leave empty)
   - Start Command: (leave empty - Dockerfile handles it)
   - Environment: Docker
   
   **Option B: Use Native PHP (Alternative)**
   - In Render settings, set Environment to "PHP"
   - Build Command: (leave empty)
   - Start Command: `php -S 0.0.0.0:$PORT`
   - Root Directory: `/` (or leave default)

4. **Environment Variables (Important!):**
   - Add these in Render dashboard:
     - `SMTP_HOST=smtp.gmail.com`
     - `SMTP_USER=your-email@gmail.com`
     - `SMTP_PASS=your-app-password`
     - `SMTP_PORT=587`

5. **Update your PHP files** to use environment variables instead of hardcoded credentials

### Option 2: Railway.app

1. Sign up at https://railway.app
2. Connect GitHub
3. Create new project from GitHub repo
4. Add PHP buildpack
5. Deploy!

### Option 3: Free PHP Hosts (Manual Upload)

**InfinityFree, 000webhost, etc:**
- Upload files via FTP or File Manager
- No GitHub integration needed
- Update paths from `/rmcl` to `/`

## ⚠️ Security Notes

**BEFORE PUSHING TO GITHUB:**
1. Remove hardcoded email credentials from:
   - `quick-contact.php`
   - `sds-tds-request.php`
2. Use environment variables or a config file (add to .gitignore)

## 📝 Path Updates Needed

Your `nav.php` has `/rmcl` hardcoded. Update to:
- `/` for root domain hosting
- Or use relative paths

## 🔧 Quick Setup Commands

```bash
# Initialize Git
git init

# Add all files
git add .

# Commit
git commit -m "Initial commit"

# Add remote (replace with your repo URL)
git remote add origin https://github.com/YOUR_USERNAME/rmcl.git

# Push
git push -u origin main
```

## 🐳 Dockerfile Setup (For Render)

A `Dockerfile` has been created for you. Render will automatically use it.

**If you still get Dockerfile errors:**
1. Make sure the Dockerfile is in the root directory (it is now)
2. In Render dashboard → Settings → Environment, ensure "Docker" is selected
3. Or switch to "PHP" environment and use the native PHP option

## ✅ Files Created for Deployment

- ✅ `Dockerfile` - For Docker-based deployment
- ✅ `render.yaml` - Render configuration (optional)
- ✅ `.htaccess` - Apache configuration
- ✅ `.gitignore` - Excludes sensitive files

